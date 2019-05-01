<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\comment;
use App\movie;
use DB;
class CommentController extends Controller
{
     public static function listcomment($id){
        $data = DB::table('comments')->where('movie_id', '=',$id)->get();
         return $data;
    }

    public function store(Request $reqest,$id)
    {
    	
    $movie = movie::where('id',$id)->first();

    $userId =Auth::user()->id;
    $x=comment::create([
    	'movie_id'=>$id,
    	 'user_id'=>$userId,
       	'comment'=>$reqest->input('comment'),
    ]);

    return back();
	}
}
