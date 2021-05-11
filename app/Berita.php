<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul','content','updated_at','created_at'];
    protected $table = 'berita';
}
