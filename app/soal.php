<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//
use Auth;

class soal extends Model
{
    //protected $table = 'jadwals';
    protected $fillable = [
        'pertanyaan', 'a', 'b', 'c', 'd', 'e', 'jawaban', 'penjelasan', 
        
    ];
    public function materi()
    {
        return $this->belongsTo('App\materi');
    }
    // public function jadwals(){
    //     return $this->belongsTo('App\Jadwal', 'id_jadwal');
    // }
}
