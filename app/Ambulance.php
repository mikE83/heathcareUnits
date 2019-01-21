<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ambulance extends Model
{
    use SoftDeletes;
    //tabla ambulancias
      protected $table = 'ambulance';
      protected $fillable=['economico', 'marca', 'modelo', 'clave', 'imagen'];
}
