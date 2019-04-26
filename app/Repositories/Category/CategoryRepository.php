<?php
namespace App\Repositories\Category;


use App\Repositories\Category\CategoryInterface as CategoryInterface;
use App\category;


class CategoryRepository implements CategoryInterface
{
    public $category;


    function __construct(category $category) {
	$this->category = $category;
    }


    public function getAll()
    {
        return $this->category->all();
    }


    public function find($id)
    {
        return $this->category->findOrFail($id);
    }


    public function create(array $formdata){

    return $this->category->create($formdata);
    }
    public function destroy($id)
    {
        $this->find($id)->destroy();
        return true;
    }

    public function update($id, array $attributes)
    {
       $category = $this->category->find($id)->update($attributes);
       //$category->update($formdata);
        return $category;

    }
}
