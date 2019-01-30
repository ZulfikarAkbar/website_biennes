<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
//
use Auth;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    
    protected $fillable = [
        'date', 'topik', 'kelas', 'name', 'number', 'materi', 'video'
    ];
    public function isOwner()
	{
        if (Auth::guest())
            return false;
        
		return Auth::user()->id == $this->user->id;
	}
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function belajars(){
        return $this->hasMany('App\belajar');
    }
    
}
