<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryInterface;
use Illuminate\Http\Request;
use App\category;
use DB;

/**
 * @property CategoryInterface category
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CategoryInterface $category
     */
    public function  __construct(CategoryInterface $Category)
    {
     $this->Category = $Category;
    }


    public static function index()
    {
        $catdata = DB::table('category')->get();
        return $catdata;
    }
public function add_category(){
        return view('admin.add_category');
    }
    public function edit_category($id){
        //$data=Category::findOrFail($id);
        $data = $this->Category->find($id);
        return view('admin.edit_category',compact('data'));
    }


    public function list_category_p(){
        //$data=DB::table('category')->get();
        $data=$this->Category->getAll();
        return view('admin.list_category',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
    }
    public static function ListCategory(){

        $catdata = DB::table('category')->get();
        return $catdata;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
        return view('admin/add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
           'cat_name' => 'required',
           'cat_des' => 'required'

       ]);

        $this->Category->create($request->all());
        //Category::create($form_data);
        return redirect('add_category')->with('success','Data Added successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'cat_name' => 'required',
           'cat_des' => 'required'

       ]);
        $form_data=array(
        'cat_name' => $request->cat_name,
        'cat_des'  => $request->cat_des
        );
         $this->Category->update($id,$form_data);
        //Category::whereId($id)->update($form_data);
        return redirect('list_category')->with('success','data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Category::findOrFail($id);
        $data->delete();
        return redirect('list_category')->with('success','data is successfully Deleted');
    }
}
