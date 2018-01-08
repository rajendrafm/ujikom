<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
     protected $fillable=['title','cover','isi'];
    protected $visible=['title','cover','isi'];
}
