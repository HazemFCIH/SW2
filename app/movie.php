<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table='movie';
    protected $fillable = [
        'id','mov_name','cat_id','img_path','source_path'
    ];
   
    //
}
