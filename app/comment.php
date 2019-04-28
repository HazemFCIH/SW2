<?php

namespace App;
use App\movie;
use App\User;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $table='comments';
    protected $fillable = [
        'id','movie_id','user_id','comment'
    ];
	public function movie()
	{
		return $this->belongsTo('App/movie');
	}
    //
}
 