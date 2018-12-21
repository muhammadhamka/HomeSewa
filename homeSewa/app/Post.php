<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'lodger';
	protected $fillable = ['name','id','contact','type'];
    
    
}
