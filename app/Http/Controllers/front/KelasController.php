<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Kelas;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kelas' => Kelas::all()
        ];

        return view('front.kelas.index', $data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        
        $data = [
            'materi' => Materi::where('id_kelas', $dec_id)->get(),
            'kelas' => Kelas::where('id', $dec_id)->first()
        ];
        // dd($data['materi']);
        return view('front.kelas.detail', $data);
    }

    public function belajar($id, $idvideo)
    {
        $dec_id = Crypt::decrypt($id);
        $dec_idvideo = Crypt::decrypt($idvideo);
        $data = [
            'kelas' => Kelas::find($dec_id),
            'video' => Video::find($dec_idvideo)
        ];

        return view('front.kelas.belajar',$data);
    }
}