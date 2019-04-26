<?php

namespace App\Helpers;

use DB;
use App\movie;




class MyFacade {



    public static function listmovie($id)
    {
$movies = DB::table('movie')->where('cat_id', '=',$id)->get();
        return $movies;

    }

}
