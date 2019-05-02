<?php

namespace App\Http\Controllers;
use App\rating1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\movie;
class RatingController extends Controller
{
    public function store(Request $reqest,$id)
    {

    $movie = movie::where('id',$id)->first();
    $userId =Auth::user()->id;
    $x=rating1::create([
    	 'movie_id'=>$id,
    	 'user_id'=>$userId,
    	'rating'=>$reqest->input('star'),
    ]);
    return back();
	}
     public static function getrate($id){
        $data = DB::table('rating')->where('movie_id', '=',$id)->avg('rating');
         return $data;
    }

}
/*public function add($id)

    {
      $userId =Auth::user()->id;
      $movie = movie::where('id',$id)->first();
      $user_id=$userId;
      $movie_id=$movie;
      $data=array('user_id'=>$user_id,'movie_id'=>$movie_id);
      DB::table('watchlist')->insert($data);
      return back();
       $user_id=$userId;
    $movie_id=$movie;
    $rating=$reqest->input('star');
    $data=array('movie_id'=>$movie_id,'user_id'=>$user_id,'rating'=>$rating);
    DB::table('watchlist')->insert($data);
    }*/
