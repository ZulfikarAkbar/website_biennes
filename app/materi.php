<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $fillable = ['nama_soal'];

    public function soals()
    {
        return $this->hasMany('App\soal');
    }
}
