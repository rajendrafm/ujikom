<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
       protected $fillable=['nama','kelas'];
    protected $visible=['nama','kelas'];
}
