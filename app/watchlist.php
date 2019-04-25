<?php

namespace App;
use App\movie;
use App\User;
use Illuminate\Database\Eloquent\Model;


class watchlist extends Model
{
    protected $table    = 'watchlist';
    protected $fillable = ['id','user_id','movie_id'];

    public function movie(){
    	return $this -> belongsTo(movie::class);
    }
    public function user(){
    	return $this -> belongsTo(User::class);
    }
}
