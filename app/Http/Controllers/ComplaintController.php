<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Complaint;


use Session;

class ComplaintController extends Controller
{
    public function add_complaint()
    {

        return view('complaint.add-complaint');
    }

    public function create(Request $request)
    {

        // $created_by = $request->session()->get('login');
        $complaint = new complaint();
        $complaint->agency = $request->agency;
        $complaint->district = $request->district;
        $complaint->location  = $request->location;
        $complaint->mobile  = $request->mobile;
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->complaint = $request->complaint;
        $complaint->complainee_name = $request->complainee_name;
        $complaint->complainee_mobile  = $request->complainee_mobile;
        $complaint->created_by = "created_by";
        $complaint->pia  = "";
        $complaint->dist  = "";
        $complaint->breda  = "";
        $complaint->save();
        return back()->with('status', 'Complaint Added Successfully');
    }
    public function view_breda(Request $request)
    {
        $data['data'] = DB::table('complaints')->paginate(50);
        return view('complaint.view-breda-complain' ,$data);
    }
    public function view_pia(Request $request)
    {
     $data = DB::table('complaints')->paginate(50);
        return view('complaint.view-pia-complain');
    } public function view_district(Request $request)
    {
        // $data = DB::table('complaints')->paginate(50);
        return view('complaint.view-district-complain');
    }

     public function edit($id)
    {
        $data['complaint'] = Complaint::find($id);
        return view('complaint.update-complaint', $data);
    }
 
   

   
}
