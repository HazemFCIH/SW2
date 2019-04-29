<?php


namespace App\Repositories\Movie;


interface  MovieInterface
{
    public function getAll();


    public function find($id);

    public function create(array $formdata);

    public function update($id, array $attributes);

    public function destroy($id);
}
