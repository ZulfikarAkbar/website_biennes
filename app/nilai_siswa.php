<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_siswa extends Model
{
    protected $table = 'nilai_user';

    protected $fillable = ['id_user', 'materi_id', 'nilai'];
}
