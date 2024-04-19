<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.add-user');
    }
  
    public function view_user(Request $request)
    {
         $data['user'] = DB::table('users')->paginate(30);
        return view('user.view-user',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|digits:10|unique:users,mobile',
            'password' => 'required',
            'role' => 'required',
        ], [
            'email.unique' => 'The email has already been taken.',
            'mobile.unique' => 'The mobile number has already been taken.',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->district = $request->district;
        $user->designation = $request->designation;
        $user->pass_word = $request->password;
        $user->role = $request->role;
        $user->created_by = $request->created_by;
        $user->save();
        return back()->with('status', 'User Added Successfully');
    }

    public function edit(Request $request, $id)
    {
        $data['user'] = User::find($id);
        
        return view('user.update-user', $data);
    }


    public function update(Request $request)
    {
        $id=$request->uid;
        $validator = $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->district = $request->district;
        $user->designation = $request->designation;
        if($request->password!=null){
        $user->pass_word = $request->password;
        }
        $user->role = $request->role;
        $user->save();
        return redirect(route('view-user'))->with('status', 'User Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route("view-user"))->with('status', 'User Data Deleted Successfully!!');
    }

  
}
