<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['jenis','content','updated_at','created_at'];
    protected $table = 'program';
}
