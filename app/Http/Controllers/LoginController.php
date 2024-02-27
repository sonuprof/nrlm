<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use DB;
use Hash;

class LoginController extends Controller
{

  public function index(Request $request){
    return view('pages.login');
   }
   
   
   public function help(Request $request){
    return view('pages.help');
   }



    public function loginuser(Request $request){
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
       

        $user = DB::table('users')->where('email', '=', $request->email)->first();
        if($user){
            if($request->password == $user->pass_word){
                $request->session()->put('loginId', $user->id );
                $request->session()->put('loginName', $user->email);
                $request->session()->put('login', $user->name);
                $request->session()->put('role', $user->role);
                return redirect(route('add-complaint'));
            }
            else{
                return back()->with('status','Password not matches!!!');
            }
        }
        else{
                return back()->with('status','Email Id not exist!!!');
            }
        
    }


    public function logout(){
        if (Session::has('loginName')){
            Session::pull('loginName');
            Session::pull('loginId');
            Session::pull('role');
            return redirect(route('login'));
         }
    }
}
