<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $fillable=['title','cover','isi'];
    protected $visible=['title','cover','isi'];
}
