<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\movie;
use App\watchlist;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('fciflix.home');
    }
    public function view_profile()
    {
        $watchlist= watchlist::with('movie')->get();
        return view('fciflix.profile',['watchlist'=>$watchlist]);
    }

    public function view_profile2()
    {
        $id=Auth::user()->id;
        //$watchlist=watchlist::with('movie')->get()->where('user_id',$id)->first();
        //dd($watchlist);
        //$watchlist= watchlist::with('user')->get();
        $watchlist=watchlist::where('user_id',$id)->with('movie')->get();
        //$movie=movie::where('id',$id);
        //dd($watchlist);
        return view('fciflix.profile',['watchlist'=>$watchlist]);

    }
    public function delete($id){
        $watchlist=watchlist::find($id);
        $watchlist-> delete();
        return back();
    }

    public function Edit_Profile($id){
        $profile=User::where('id',$id)->first();
        return view('fciflix.Edit_Profile',['profile'=>$profile]);
    }
    public function update(Request $request){
        $profile = User::find($request->user_id);
        $profile->name = $request->name;
        $profile->email =$request->email;
        $profile->password = Hash::make($request['password']);
        $profile->save();
        return redirect('/home/profile')->with('message','updated successfully');
    }
}
