<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use PDF;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Semua Transaksi',
            'transaksis' => DB::table('transaksi')->join('users', 'transaksi.id_user', '=', 'users.id')->where('nama', '!=', 'admin')->get(),
        ];
        // $ids = DB::table('transaksi')->select('id_user')->where('id_transaksi', '=', 1)->first();

        // dd($ids);
        return view('admin.transaksi.index', $data);
    }

    public function belumdicek()
    {
        $data = [
            'title' => 'Transaksi Diproses ',
            'transaksis' => DB::table('transaksi')->join('users', 'transaksi.id_user', '=', 'users.id')->where('nama', '!=', 'admin')->where('status', '=', 'diproses')->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function disetujui()
    {
        $data = [
            'title' => 'Transaksi Disetujui',
            'transaksis' => DB::table('transaksi')->join('users', 'transaksi.id_user', '=', 'users.id')->where('nama', '!=', 'admin')->where('status', '=', 'disetujui')->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function ditolak()
    {
        $data = [
            'title' => 'Transaksi Ditolak',
            'transaksis' => DB::table('transaksi')->join('users', 'transaksi.id_user', '=', 'users.id')->where('nama', '!=', 'admin')->where('status', '=', 'ditolak')->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'title' => 'Detail Transaksi',
            'transaksi' => Transaksi::find($dec_id)
        ];
        return view('admin.transaksi.detail', $data);
    }

    public function setuju($id)
    {
        $dec_id = Crypt::decrypt($id);
        // $transaksi =;
        DB::table('transaksi')->where('id_transaksi', '=', $dec_id)->update(['status' => 'disetujui']);
        $ids = DB::table('transaksi')->select('id_user')->where('id_transaksi', '=', $dec_id)->first();
        DB::table('users')->where('id', '=', $ids->id_user)->update(['role' => 'regular']);
        // if ($request->status == 1) {
        // $transaksi->status = 1;
        // User::where('id', '=', $transaksi->users_id)->update(['role' => 'premium']);
        // } else {
        // $transaksi->status = 2;
        // User::where('id_user', '=', $transaksi->id_user)->(['role' => 'regular']);
        // }

        // User::save();
        return redirect()->back()->with('status', 'Berhasil menyetujui bukti pembayaran');

        // return redirect()->route('admin.transaksi.detail', $id)->with('status', 'Berhasil Memperbaharui Status');
    }
    public function tolak($id)
    {
        $dec_id = Crypt::decrypt($id);
        DB::table('transaksi')->where('id_transaksi', '=', $dec_id)->update(['status' => 'ditolak']);
        $ids = DB::table('transaksi')->select('id_user')->where('id_transaksi', '=', $dec_id)->first();
        DB::table('users')->where('id', '=', $ids->id_user)->update(['role' => '']);
        return redirect()->back()->with('status', 'Berhasil menolak bukti pembayaran');
    }

    public function cetak_pdf()
    {
        $transaksi = Transaksi::all();
        $pdf = PDF::loadview('admin.transaksi.transaksi_pdf', ['transaksi' => $transaksi]);
        return $pdf->stream();
    }
}
