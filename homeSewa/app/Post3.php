<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post3 extends Model
{
    protected $table = 'package';
	protected $fillable = ['filename','type'];
}
