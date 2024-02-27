<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.add-site');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function view_site(Request $request)
    {
         $data['site'] = DB::table('sites')->paginate(30);
        return view('site.view-site',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->all());
      
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:sites,email',
        //     'mobile' => 'required|digits:10|unique:sites,mobile',
        //     'password' => 'required',
        //     'role' => 'required',
        // ], [
        //     'email.unique' => 'The email has already been taken.',
        //     'mobile.unique' => 'The mobile number has already been taken.',
        // ]);
        $site = new Site();
        $site->name = $request->name;
        $site->email = $request->email;
        $site->mobile = $request->mobile;
        $site->district = $request->district;
        $site->block = $request->block;
        $site->village = $request->village;
        $site->lattitude = $request->lattitude;
        $site->longitude = $request->longitude;
        $site->created_by = $request->created_by;
        $site->save();
        return back()->with('status', 'site Added Successfully');
    }

    public function edit(Request $request, $id)
    {
        $data['site'] = site::find($id);
        
        return view('site.update-site', $data);
    }


    public function update(Request $request)
    {
        $id=$request->uid;
        $validator = $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
        ]);
        $site = site::find($id);
        $site->name = $request->name;
        $site->email = $request->email;
        $site->mobile = $request->mobile;
        $site->district = $request->district;
        $site->block = $request->block;
        $site->village = $request->village;
        $site->lattitude = $request->lattitude;
        $site->longitude = $request->longitude;
        $site->save();
        return redirect(route('view-site'))->with('status', 'Site Updated Successfully');
    }

    public function destroy($id)
    {
        $site = site::find($id);
        $site->delete();
        return redirect(route("view-site"))->with('status', 'Site Data Deleted Successfully!!');
    }

  
}
