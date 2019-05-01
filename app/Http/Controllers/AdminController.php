<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Http\Controllers\Auth\LoginController;

class AdminController extends Controller
{
    public static function dashboard($id){
        if($id ==2){

          return view('admin.dashboard');

        }else {

            return redirect('home');
        }



    }

   /*public function insert_category()
    {
        create_categories::create ([

            'name'=>request('name'),
            'description'=>request('description'),



        ]);

        return back();
    }*/
}
    /*public function add_categories ()
    {
        return view('add_category');
    }*/

