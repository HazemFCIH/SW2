<?php

namespace App;
use App\movie;
use App\User;
use Illuminate\Database\Eloquent\Model;

class rating1 extends Model
{
    
    protected $table='rating';
    protected $fillable = [
        'id','movie_id','user_id','rating'
    ];
    public function movie()
	{
		return $this->belongsTo('App/movie');
	}
    //
}
