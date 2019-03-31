<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table='movie';
    protected $movies = [
        'id','mov_name','cat_id','img_Path','source_path'    
    ];
   
    //
}
