<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PE;
use App\Imports\PEImport;
use Excel;
use Session;

class PEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PE.add-PE');
    }
    public function view_pe_import()
    {
        return view('PE.importPE');
    }
    
    public function PEimport(Request $request)
    {
        set_time_limit(0);
        $filePath = $request->file('pe_excel');
        $import = new PEImport();
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }

    public function view_PE(Request $request)
    {
         $data['pe'] = DB::table('p_e_s')->orderBy('state', 'ASC')->get();
        return view('PE.view-PE',$data);
    }

    public function getState(Request $request, $state)
    {
       
        $data['pe'] = PE::where('state', $state)->orderBy('state', 'ASC')->get();
        return view('PE.state-wise-PE', $data);
    } 
    public function getDistrict(Request $request, $district)
    {
     
        $data['pe'] = PE::where('district', $district)->orderBy('state', 'ASC')->get();
        return view('PE.district-wise-PE', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->all());
        $pe = new PE();
        $pe->state = $request->state;
        $pe->promoting_agency = $request->promoting_agency;
        $pe->fpo = $request->fpo;
        $pe->district = $request->district;
        $pe->regs_date = $request->regs_date;
        $pe->commodity = $request->commodity;
        $pe->members = $request->members;
        $pe->sales_revenue_2017_18 = $request->sales_revenue_2017_18;
        $pe->sales_revenue_2018_19 = $request->sales_revenue_2018_19;
        $pe->sales_revenue_2019_20 = $request->sales_revenue_2019_20;
        $pe->sales_revenue_2020_21 = $request->sales_revenue_2020_21;
        $pe->sales_revenue_2021_22 = $request->sales_revenue_2021_22;
        $pe->sales_revenue_2022_23 = $request->sales_revenue_2022_23;
        $pe->mem_target_fy_2023_24 = $request->mem_target_fy_2023_24;
        $pe->sales_revenue_2023_24 = $request->sales_revenue_2023_24;
        $pe->created_by = $request->created_by;
        $pe->save();
        return redirect(route('view-PE'))->with('status', 'PE   Added Successfully');
    }

    // public function edit(Request $request, $id)
    // {
    //     $data['pe'] = PE::find($id);
        
    //     return view('pe.update-PE', $data);
    // }


    // public function update(Request $request)
    // {
        
    //     $id=$request->sid;
    //     $pe = PE::find($id);
    //     $pe->saral_id = $request->saral_id;
    //     $pe->application_no = $request->application_no;
    //     $pe->empanelled_agency = $request->empanelled_agency;
    //     $pe->beneficiary = $request->beneficiary;
    //     $pe->gender = $request->gender;
    //     $pe->category = $request->category;
    //     $pe->caste = $request->caste;
    //     $pe->mobile = $request->mobile;
    //     $pe->location = $request->location;
    //     $pe->survey_date = $request->survey_date;
    //     $pe->aadhar_status = $request->aadhar_status;
    //     $pe->installation_village = $request->installation_village;
    //     $pe->installation_dsitrict = $request->installation_dsitrict;
    //     $pe->latitude = $request->latitude;
    //     $pe->longitude = $request->longitude;
    //     $pe->required_pump = $request->required_pump;
    //     $pe->pump_sub_type = $request->pump_sub_type;
    //     $pe->pump_capacity = $request->pump_capacity;
    //     $pe->spv_capacity = $request->spv_capacity;
    //     $pe->pump_make = $request->pump_make;
    //     $pe->module_make = $request->module_make;
    //     $pe->vfd_make = $request->vfd_make;
    //     $pe->rms_condtn = $request->rms_condtn;
    //     $pe->sys_install_date = $request->sys_install_date;
    //     $pe->sys_inspect_date = $request->sys_inspect_date;
    //     $pe->sys_inspectby = $request->sys_inspectby;
    //     $pe->cfa = $request->cfa;
    //     $pe->sfa = $request->sfa;
    //     $pe->beneficiary_share = $request->beneficiary_share;
    //     $pe->total_pump_cost = $request->total_pump_cost;
    //     $pe->sanction = $request->sanction;
    //     $pe->app_current_status = $request->app_current_status;
    //     $pe->survey_by = $request->survey_by;
    //     $pe->father_name = $request->father_name;
    //     $pe->land_coverage = $request->land_coverage;
    //     $pe->irrigationmode = $request->irrigationmode;
    //     $pe->water_source = $request->water_source;
    //     $pe->water_depth = $request->water_depth;
    //     $pe->imei = $request->imei;
    //     $pe->pump_no = $request->pump_no;
    //     $pe->pump_controller_no = $request->pump_controller_no;
    //     $pe->solar_panel_no = $request->solar_panel_no;
    //     $pe->southfacing = $request->southfacing;
    //     $pe->pe_suitable = $request->pe_suitable;
    //     $pe->head_pump = $request->head_pump;
    //     $pe->survey_latitude = $request->survey_latitude;
    //     $pe->survey_longitude = $request->survey_longitude;
    //     $pe->survey_done = $request->survey_done;
    //     $pe->is_feasible_app = $request->is_feasible_app;
    //     $pe->feasible_date = $request->feasible_date;
    //     $pe->member_id = $request->member_id;
    //     $pe->family_id = $request->family_id;
    //     $pe->controller_type = $request->controller_type;
    //     $pe->old_app = $request->old_app;
    //     $pe->boring_dym = $request->boring_dym;
    //     $pe->save();
    //     return back()->with('status', 'pe  Survey Updated Successfully');
    // }

    // public function destroy($id)
    // {
    //     $pe = PE::find($id);
    //     $pe->delete();
    //     return redirect(route("view-pe-survey"))->with('status', 'pe  Survey  Data Deleted Successfully!!');
    // }
    


}