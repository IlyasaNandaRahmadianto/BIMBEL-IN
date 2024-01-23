<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data User',
            'pendaftaran' => User::all()
        ];
        return view('front.pendaftaran.index', $data);
    }

    public function simpan(Request $request)
    {
        $validator = Validator($request->all(), [
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            // 'role' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->route('pendaftaran')->withErrors($validator)->withInput()->with('status_error', 'Gagal mendaftar');
        } else {
            $obj = [
                'nama' => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => '',
                'no_hp' => $request->no_hp,
                'nama_ortu' => $request->nama_ortu,
                'alamat' => $request->alamat,
            ];
            User::insert($obj);
            return redirect()->route('pendaftaran')->with('status', 'Berhasil Melakukan Pendaftaran');
        }
    }

    // public function uploadulang(Request $request)
    // {
    //     $validator = Validator::make($request->all(),[
    //         'bukti' => 'required|mimes:png,jpg,jpeg'
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect('upgradepremium')->withErrors($validator)->withInput();
    //     }else{

    //         $file = $request->file('bukti')->store('buktitf','public');
    //         $obj = [
    //             'users_id' => Auth::user()->id,
    //             'status' => '0',
    //             'bukti_transfer' => $file
    //         ];

    //         Transaksi::where('id','=',Auth::user()->id)->update($obj);
    //         return redirect('upgradepremium')->with('status','Berhasil Mengirim Ulang Transfer');
    //     }
    // }
}
