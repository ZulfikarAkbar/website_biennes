<?php

namespace App\Http\Controllers;
use App\Jadwal;
use App\User;
use Alert;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
  {
        $jadwals = Jadwal::all();

        return view('jadwals.index', compact('jadwals'));
  }


  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function create()
  {
      return view('jadwals.create');
  }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {
        $this->validate($request,[
            'date'=>'required|min:10|max:10',
            'topik'=>'required',
            'kelas'=>'required|max:11',
            //'ruang'=>'required|min:3|max:3',
            'name'=>'required',
            'number'=>'required|min:12|max:12',
            'materi'=>'required|mimes:pdf,',
            //'quiz'=>'required',
            'video'=>'required', 
        ]);
/*
        $request->validate([
            'date'=>'required|min:10|max:10',
            'topik'=>'required',
            'kelas'=>'required|max:11',
            'ruang'=>'required|min:3|max:3',
            'name'=>'required',
            'number'=>'required|min:12|max:12',
            'materi'=>'required',
            'quiz'=>'required',
            'video'=>'required', 
            
        ]);
        */
        /*
        if($request->hasfile('materi'))
         {
            $file = $request->file('materi');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/pdfs/', $name);
         }
         */
        /*
        $date=date_create($request->get('date'));
        $format = date_format($date,"d-m-Y");
        $jadwal->date = strtotime($format);
         */
        //$file= time() . '.pdf';
        //$request->file('materi')->move('public/filename', $file);
       

        $materi = $request->file('materi');
        $file_materi = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $materi->getClientOriginalName();
        $request->file('materi')->storeAs('public/upload_materi', $file_materi);

        // $quiz = $request->file('quiz');
        // $file_quiz = \Carbon\Carbon::now()->format('d-m-Y') . '-'  . $quiz->getClientOriginalName();
        // $request->file('quiz')->storeAs('public/upload_quiz', $file_quiz);
/*
        $video = $request->file('video');
        $file_video = 'BIENNES_VIDEO-' . \Carbon\Carbon::now()->format('d-m-Y') . '-'  .time() . '-' .  $video->getClientOriginalName();
        $request->file('video')->storeAs('public/upload_video', $file_video);
*/
        $jadwal = Jadwal::create([
            'date' => $request['date'],
            'topik' => $request['topik'],
            'kelas' => $request['kelas'],
            //'ruang' => $request['ruang'],
            'name' => $request['name'],
            'number' => $request['number'],
            'materi' => $file_materi,
            //'quiz' => $file_quiz,
            //'video' => $file_video,
            'video' => $request['video'],
            
            
        ]);
        alert()->success('Berhasil','Konten sudah ditambahkan, terima kasih')->autoclose(3000);
        return redirect('/jadwals');
        /*
        
        $jadwal = new Jadwal([
            'date'=>$request->get('date'),
            'topik'=>$request->get('topik'),
            'kelas'=>$request->get('kelas'),
            'ruang'=>$request->get('ruang'),
            'name'=>$request->get('name'),
            'number'=>$request->get('number'),
            'materi'=>$request->get('materi'),
            'quiz'=>$request->get('quiz'),
            'video'=>$request->get('video'),
        ]);
        $jadwal->save();
        return redirect('/jadwals')->with('success', 'Jadwal sudah ditambahkan, terima kasih');
        */
    }
    
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);

        return view('jadwals.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'date'=>'required|min:10|max:10',
            'topik'=>'required',
            'kelas'=>'required|max:11',
            //'ruang'=>'required|min:3|max:3',
            'name'=>'required',
            'number'=>'required|min:12|max:13',
            'materi'=>'required|mimes:pdf',
            //'quiz'=>'required',
            'video'=>'required', 
        ]);
        
        $materi = $request->file('materi');
        $file_materi = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $materi->getClientOriginalName();
        $request->file('materi')->storeAs('public/upload_materi', $file_materi);

        // $quiz = $request->file('quiz');
        // $file_quiz = \Carbon\Carbon::now()->format('d-m-Y') . '-'  . $quiz->getClientOriginalName();
        // $request->file('quiz')->storeAs('public/upload_quiz', $file_quiz);
/*
        $video = $request->file('video');
        $file_video = 'BIENNES_VIDEO-' . \Carbon\Carbon::now()->format('d-m-Y') . '-'  .time() . '-' .  $video->getClientOriginalName();
        $request->file('video')->storeAs('public/upload_video', $file_video);
*/ 
        $jadwal = Jadwal::find($id);
        
            $jadwal->update([
                'date' => $request['date'],
                'topik' => $request['topik'],
                'kelas' => $request['kelas'],
                //'ruang' => $request['ruang'],
                'name' => $request['name'],
                'number' => $request['number'],
                'materi' => $file_materi,
                //'quiz' => $file_quiz,
                //'video' => $file_video,
                'video' => $request['video']
            ]);
        alert()->success('Berhasil','Konten sudah diperbarui, terima kasih')->autoclose(3000);
        return redirect('/jadwals');
        
        /*
        $jadwal-> date=$request->get('date');
        $jadwal-> topik=$request->get('topik');
        $jadwal-> kelas=$request->get('kelas');
        $jadwal-> ruang=$request->get('ruang');
        $jadwal-> name=$request->get('name');
        $jadwal-> number=$request->get('number');
        $jadwal-> materi=$request->get('materi');
        $jadwal-> quiz=$request->get('quiz');
        $jadwal-> video=$request->get('video');
    */
        //$jadwal->save();
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        alert()->success('Berhasil','Konten sudah dihapus, terima kasih')->autoclose(3000);
        return redirect('/jadwals');
    }
}
