<?php


namespace App\Repositories\Movie;
use  App\Repositories\Movie\MovieInterface;
use APP\movie;

class MovieRepository implements MovieInterface
{
    public $movie;


    function __construct(movie $movie) {
        $this->movie = $movie;
    }
    public function getAll()
    {
        return $this->movie->all();
    }


    public function find($id)
    {
        return $this->movie->findOrFail($id);
    }


    public function create(array $formdata){

        return $this->movie->create($formdata);
    }
    public function destroy($id)
    {
        $this->find($id)->destroy();
        return true;
    }

    public function update($id, array $attributes)
    {
        $movie = $this->movie->find($id)->update($attributes);
        //$movie->update($formdata);
        return $movie;

    }
}
