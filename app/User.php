<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        if($this->role==2) return true;
        return false;
    }
    public function jadwals()
    {
        return $this->belongsTo('App\Jadwal');
    }
    public function belajars()
    {
        return $this->belongsTo('App\belajar');
    }
    // public function videos()
    // {
    //     return $this->belongsTo('App\video');
    // }
    /*
    public function penggunas()
    {
        return $this->belongsTo('App\pengguna');
    }
    */
}
