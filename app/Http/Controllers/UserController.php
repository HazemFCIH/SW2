<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
        public function list_user(){
        $data=DB::table('users')->get();

        return view('admin.list_User',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
    }
    public function destroy($id)
    {
       $data = User::findOrFail($id);
        $data->delete();
        return redirect('list_user')->with('success','data is successfully Deleted');
    }

}
