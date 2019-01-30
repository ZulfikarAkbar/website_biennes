<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
//
use Auth;

class pengguna extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    
}
