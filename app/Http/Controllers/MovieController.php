<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
use DB;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('fciflix.movie');
    }
    public function dashboard(){

        return view('admin.dashboard');

    }

     public function add_movies(){
        return view('admin.add-movie');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public static function listmov($id){
        $movies = DB::table('movie')->where('cat_id', '=',$id)->get();
        return $movies;
    }
    public static function viewMovie( $id){
      $movies = DB::table('movie')->where('id', '=',$id)->get();
        return view('fciflix.movie',['movies' => $movies]);
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
            'mov_name'    => 'required',
            'img_path'    => 'required|image|max:2048',
            'cat_id'      => 'required',
            'source_path' => 'required'

        ]);
        $img_path = $request->file('img_path');
        $new_name = rand().'.'.$img_path->
            getClientOriginalExtension();
        $img_path->move(public_path('images'),$new_name);
        $form_data=array(
            'mov_name' => $request->mov_name,
            'img_path' => $new_name,
            'cat_id' => $request->cat_id,
            'source_path'=>$request->source_path
        );
        Movie::create($form_data);
        return redirect('add-movie')->with('success','Data Added successfully.');
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
        //
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
