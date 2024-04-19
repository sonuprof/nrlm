<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PG;
use Illuminate\Support\Facades\DB;
use Session;
use App\Imports\PGImport;
use Excel;



class PGController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PG.add-PG');
    }
    public function view_pg_import()

    {
        return view('PG.importPG');
    }
    
    public function PGimport(Request $request)
    {
        set_time_limit(0);
        $filePath = $request->file('pg_excel');
        $import = new PGImport();
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }

    public function view_PG(Request $request)
    {
       

// Example arrays
$numericValues = [1, 2, 3, 4, 5];
$stringValues = ["a", "b", "c", "d", "e"];

// Merge element-wise
$mergedArray = [];

for ($i = 0; $i < count($numericValues) && $i < count($stringValues); $i++) {
    
    $mergedArray[] = $stringValues[$i];
    $mergedArray[] = $numericValues[$i];
}

// Print the merged array

        $clickedState = $request->session()->get('clicked_state');

         $data['pg'] = DB::table('p_g_s')->where('state',$clickedState)
         ->get();
       
         return view('PG.view-PG',$data);
        }


    public function getState(Request $request, $state)
    {
       
        $data['pg'] = PG::where('state', $state)->get();
    
        return view('PG.state-wise-PG', $data);
    } 
    public function getDistrict(Request $request, $district)
    {
     
        $data['pg'] = PG::where('district', $district)->get();
        return view('PG.district-wise-PG', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $pg = new PG();
        $pg->state =$request->state;
        $pg->district =$request->district;
        $pg->block =$request->block;
        $pg->village =$request->village;
        $pg->int_producer_id =$request->int_producer_id;
        $pg->pgroupname =$request->pgroupname;
        $pg->date_of_formation =$request->date_of_formation;
        $pg->category_Name =$request->category_Name;
        $pg->commoditties =$request->commoditties;
        $pg->office_address =$request->office_address;
        $pg->member_no_in_pgroup =$request->member_no_in_pgroup;
        $pg->bank_name =$request->bank_name;
        $pg->branch_name =$request->branch_name;
        $pg->signatoryname1 =$request->signatoryname1;
        $pg->signatorydesignation1 =$request->signatorydesignation1;
        $pg->desg_commoditties =$request->desg_commoditties;
        $pg->community_cader_name =$request->community_cader_name;
        $pg->promotedunderschemename =$request->promotedunderschemename;
        $pg->financial_month_year =$request->financial_month_year;
        $pg->initial_cash_in_hand =$request->initial_cash_in_hand;
        $pg->initial_cash_in_bank =$request->initial_cash_in_bank;
        $pg->initial_stock_cost =$request->initial_stock_cost;
        $pg->initial_total_amount =$request->initial_total_amount;
        $pg->entered_mis_date =$request->entered_mis_date;
        $pg->created_by =$request->created_by;
        $pg->save();
        return redirect(route('add-PG'))->with('status', 'PG Added Successfully');
    }

   


}
