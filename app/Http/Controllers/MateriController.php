<?php

namespace App\Http\Controllers;
use App\materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
   public function show_materi(){
        $materi = materi::all();
        return view('materi/show_materi', ['materis' => $materi]);
   }
   public function create_materi(){
       return view('materi/create_materi');
   }
   public function store_materi(Request $request){
        $this->validate($request, [
            'nama_soal'   => 'required',
        ]);

        materi::create([
            'nama_soal'      => $request->nama_soal,
        ]);
        alert()->success('Berhasil','Materi sudah ditambah, terima kasih')->autoclose(3000);
        return redirect('/materi');
   }
   public function edit_materi($id){
        $materi = materi::find($id);

        if(!$materi)
        abort(404);

        return view('materi/edit_materi', ['materi' => $materi]);
   }
   public function update_materi(Request $request, $id){
        $this->validate($request, [
            'nama_soal'   => 'required',
        ]);

        materi::find($id)->update([
            'nama_soal'      => $request->nama_soal,
        ]);
        alert()->success('Berhasil','Materi sudah diperbarui, terima kasih')->autoclose(3000);
        return redirect('/materi');
   }
   public function destroy_materi($id){
        $materi = materi::find($id);
        $materi->delete();
        alert()->success('Berhasil','Materi sudah dihapus, terima kasih')->autoclose(3000);
        return redirect('/materi');
   }


   public function create_soal($id){
       return view('soal/create_soal', ['id' => $id]);
   }
   
   public function store_soal(Request $request, $id){
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

    $materi = materi::find($id);
        $materi->soals()->create([
            'pertanyaan'  => $request->pertanyaan,
            'a'  => $request->a,
            'b'  => $request->b,
            'c'  => $request->c,
            'd'  => $request->d,
            'e'  => $request->e,
            'jawaban'  => $request->jawaban,
            'penjelasan'  => $request->penjelasan,
        ]);
        alert()->success('Berhasil','Soal sudah ditambah, terima kasih')->autoclose(3000);
        return redirect('/soal/admin/'.$id);

        //return redirect('/create_soal'.$id)->with('message', 'Soal berhasil ditambah!');
    
    
   }
   public function show_edit_soal($id){
        $materi = materi::find($id);

        if(!$materi)
        abort(404);

        return view('soal/show_edit_soal', ['materi' => $materi]);
   }



   public function index_soal(){
        $materi = materi::all();
        return view('materi_user/index_materi', ['materis'=>$materi]);
   }
   public function show_soal($id){
        $materi = materi::find($id);

        if(!$materi)
        abort(404);
        return view('materi_user/show_index_materi', ['materi' => $materi]);
}
}
