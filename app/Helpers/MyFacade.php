<?php

namespace App\Helpers;

use DB;
use App\movie;




class MyFacade {

 private function __construct() {

 }


    public static function listmovie($id)
    {
		$movies = DB::table('movie')->where('cat_id', '=',$id)->get();
        return $movies;

    }

}
