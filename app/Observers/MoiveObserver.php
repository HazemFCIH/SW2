<?php

namespace App\Observers;
use App\movie;
class MoiveObserver
{
    public function  created(movie $movie)
    {
        $new_movie = array(
            'id'      => $movie->id,
            'mov_name' => $movie->mov_name,
            'img_path' => $movie->img_path


        );
        //return view('fciflix.home',compact('new_movie'));
        //return redirect('home');
           return redirect()
                            ->route("home")->with( 'new_movie',$new_movie)->send();
    }
}
