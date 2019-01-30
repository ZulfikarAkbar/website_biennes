<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\User;
use App\soal;
use App\nilai_siswa;


class nilai_siswa_controller extends Controller
{
    // public function show_nilai($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('siswa/nilai', ['user' => $user]);
    // }

    

    public function nilai(Request $request, $materi_id, $id_user)
    {
        $soals = soal::where('materi_id', $materi_id)->get();
        $banyak_soal = $soals->count();
        //dd($request->jawaban1);
        //dd($pilihans[0]->opsiBenar);
        $soal_soal = 
            [$request->jawaban1,  $request->jawaban2,  $request->jawaban3,  $request->jawaban4,  $request->jawaban5, 
             $request->jawaban6,  $request->jawaban7,  $request->jawaban8,  $request->jawaban9,  $request->jawaban10, 
             $request->jawaban11, $request->jawaban12, $request->jawaban13, $request->jawaban14, $request->jawaban15, 
             $request->jawaban16, $request->jawaban17, $request->jawaban18, $request->jawaban19, $request->jawaban20,
             $request->jawaban21, $request->jawaban22, $request->jawaban23, $request->jawaban24, $request->jawaban25, 
             $request->jawaban26, $request->jawaban27, $request->jawaban28, $request->jawaban29, $request->jawaban30
            ];


        $nilai = 0;
        for($i=0; $i<$banyak_soal; $i++) {
            if($soals[$i]->jawaban == $soal_soal[$i]){
                $nilai = $nilai + 1;
            }
        }
        $nilai = ($nilai/$banyak_soal)*100;
        nilai_siswa::create([
            'id_user'   => $id_user,
            'materi_id'   => $materi_id,
            'nilai'     => $nilai,
        ]);
        return view('jawaban_pembahasan_nilai/jawaban_pembahasan_nilai', ['nilai' => $nilai, 'soals'=>$soals, 'jawaban' => $soal_soal]);
    }
}