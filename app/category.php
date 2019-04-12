<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table    = 'category';
    protected $fillable = ['id','cat_name','cat_des'];
}
