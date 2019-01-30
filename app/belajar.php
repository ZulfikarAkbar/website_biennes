<?php

namespace App;
use App\Jadwal;
use Illuminate\Database\Eloquent\Model;
//
use Auth;

class belajar extends Model
{
    protected $table = 'jadwals';
    protected $fillable = [
        'date', 'topik', 'kelas', 'ruang', 'name', 'number', 'materi', 'quiz','video'
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function jadwals(){
        return $this->belongsTo('App\Jadwal', 'id_jadwal');
    }
}
