<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class AdminController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');

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

