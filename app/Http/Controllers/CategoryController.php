<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $catdata = DB::table('category')->get();
        return $catdata;
    }
public function add_category(){
        return view('admin.add_category');
    }
    public function edit_category($id){
        $data=Category::findOrFail($id);
        return view('admin.edit_category',compact('data'));
    }


    public function list_category_p(){
        $data=DB::table('category')->get();
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
        $form_data=array(
        'cat_name' => $request->cat_name,
        'cat_des'  => $request->cat_des
        );
        Category::create($form_data);
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
        Category::whereId($id)->update($form_data);
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
        //
    }
}
