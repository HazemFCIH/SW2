<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table    = 'category';
    protected $fillable = ['id','cat_name','cat_des'];
   /* public function getAll()
    {
        return static::all();

    }
*/
    /*public static function find($id)
    {
        return static::findOrFail($id);
    }*/

    /*public function create(array $formdata){
        return static::create($formdata);

    }*/

    /*public function update($id, array $attributes)){
        return static::update($id,$formdata);
    }*/

    /*public static function destroy($id){
        return static::find($id)->destroy();
    }*/
}
