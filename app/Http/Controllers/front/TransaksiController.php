<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'transaksi' => Transaksi::all()->where('id_user', Auth::user()->id),
            'i' => 1
        ];
        if ($data) {

            return view('front.transaksi.index', $data);
        } else {
            return view('front.transaksi.index');
        }
    }
    public function daftar()
    {

        return view('front.transaksi.daftar');
    }

    public function uploadbukti(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bukti' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect('daftar')->withErrors($validator)->withInput();
        } else {

            $file = $request->file('bukti')->store('buktitf', 'public');
            $obj = [
                'id_user' => Auth::user()->id,
                'tanggal' => $request->post('date'),
                'jenis' => '',
                'role' => 'regular',
                'bukti_tf' => $file
            ];

            Transaksi::create($obj);
            return redirect('daftar')->with('status', 'Berhasil Mengirim Bukti Transfer');
        }
    }

    public function uploadulang(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bukti' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect('upgradepremium')->withErrors($validator)->withInput();
        } else {

            $file = $request->file('bukti')->store('buktitf', 'public');
            $obj = [
                'users_id' => Auth::user()->id,
                'status' => '0',
                'bukti_transfer' => $file
            ];

            Transaksi::where('id', '=', Auth::user()->id)->update($obj);
            return redirect('upgradepremium')->with('status', 'Berhasil Mengirim Ulang Transfer');
        }
    }
}
