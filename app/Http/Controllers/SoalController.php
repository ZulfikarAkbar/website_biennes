<?php

namespace App\Http\Controllers;
use App\soal;
use Alert;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function edit_soal($id, $no){
        $soal = soal::find($id);

        if(!$soal)
        abort(404);

        return view('soal/edit_soal', ['soal' => $soal, 'id'=>$id, 'no'=>$no]);
    }
    public function update_soal(Request $request, $id, $no){
        $this->validate($request,[
            
            'pertanyaan'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'e'=>'required',
            'jawaban'=>'required',
            'penjelasan'=>'required',
        ]);
            soal::find($id)->update([
                'pertanyaan'  => $request->pertanyaan,
                'a'  => $request->a,
                'b'  => $request->b,
                'c'  => $request->c,
                'd'  => $request->d,
                'e'  => $request->e,
                'jawaban'  => $request->jawaban,
                'penjelasan'  => $request->penjelasan,
            ]);
        alert()->success('Berhasil','Soal sudah diperbarui, terima kasih')->autoclose(3000);
        return redirect('/soal/admin/'.$no);
    }
    public function destroy_soal($id, $no){
        $soal = soal::find($id);
        $soal->delete();
        alert()->success('Berhasil','Soal sudah dihapus, terima kasih')->autoclose(3000);
        return redirect('/soal/admin/'.$no);
    }
}
