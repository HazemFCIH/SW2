<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\comment;
use App\movie;
class CommentController extends Controller
{

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
