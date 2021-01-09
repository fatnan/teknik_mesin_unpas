<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tridharma extends Model
{
    protected $fillable = ['jenis','content','updated_at','created_at'];
    protected $table = 'tridharma';
}
