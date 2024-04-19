<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FPO;
use Illuminate\Support\Facades\DB;
use App\Imports\FPOImport;
use  Excel;
use Session;

class FPOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FPO.add-FPO');
    }

    public function view_fpo_import()

    {
        return view('FPO.importFPO');
    }
    
    public function FPOimport(Request $request)
    {
        set_time_limit(0);
        $filePath = $request->file('fpo_excel');
        $import = new FPOImport();
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function view_FPO(Request $request)
    {
        $data['state'] = $request->session()->get('clicked_state');

        $fpo = DB::table('f_p_o_s')->select('*');
        $data['fpo'] = $fpo->paginate(10);
        return view('FPO.view-FPO',$data);
    }
    public function getState(Request $request, $state)
    {
       

        $data['fpo'] = FPO::where('state', $state)->orderBy('state', 'ASC')->get();
        return view('FPO.state-wise-FPO', $data);
    } 
    public function getDistrict(Request $request, $district)
    {
     
        $data['fpo'] = FPO::where('district', $district)->orderBy('state', 'ASC')->get();
        return view('FPO.district-wise-FPO', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $fpo = new FPO();
        $fpo->implementing_agency = $request->implementing_agency;
        $fpo->state_category = $request->state_category;
        $fpo->ia_alloc_yr = $request->ia_alloc_yr;
        $fpo->alloc_yr_cbbo = $request->alloc_yr_cbbo;
        $fpo->state = $request->state;
        $fpo->district = $request->district;
        $fpo->block = $request->block;
        $fpo->district_code = $request->district_code;
        $fpo->district_name_lgd = $request->district_name_lgd;
        $fpo->block_code = $request->block_code;
        $fpo->block_name_lgd = $request->block_name_lgd;
        $fpo->alloc_category = $request->alloc_category;
        $fpo->is_aspire_district = $request->is_aspire_district;
        $fpo->is_tribal_district = $request->is_tribal_district;
        $fpo->type_promo_agency = $request->type_promo_agency;
        $fpo->cbbo = $request->cbbo;
        $fpo->cbbo_uid = $request->cbbo_uid;
        $fpo->dmc_approve = $request->dmc_approve;
        $fpo->alloc_catgory_type = $request->alloc_catgory_type;
        $fpo->odop = $request->odop;
        $fpo->odop_crop = $request->odop_crop;
        $fpo->primary_crop_approve_dmc = $request->primary_crop_approve_dmc;
        $fpo->primary_crop = $request->primary_crop;
        $fpo->secondary_crop_approve_dmc = $request->secondary_crop_approve_dmc;
        $fpo->secondary_crop = $request->secondary_crop;
        $fpo->status_baseline_survey = $request->status_baseline_survey;
        $fpo->status_board_member_identification = $request->status_board_member_identification;
        $fpo->fpo_register = $request->fpo_register;
        $fpo->fpo = $request->fpo;
        $fpo->fpo_regs_no = $request->fpo_regs_no;
        $fpo->regis_act = $request->regis_act;
        $fpo->date_Incorporation = $request->date_Incorporation;
        $fpo->fpo_intervention_crops = $request->fpo_intervention_crops;
        $fpo->additional_services_proposed_by_FPO = $request->additional_services_proposed_by_FPO;
        $fpo->udyog_aadhaar_available = $request->udyog_aadhaar_available;
        $fpo->fpo_udyog_aadhaar = $request->fpo_udyog_aadhaar;
        $fpo->fpo_udyog_aadhaar_date = $request->fpo_udyog_aadhaar_date;
        $fpo->fpo_tan_number = $request->fpo_tan_number;
        $fpo->fpo_pan_number = $request->fpo_pan_number;
        $fpo->fpo_office_address = $request->fpo_office_address;
        $fpo->fpo_office_village = $request->fpo_office_village;
        $fpo->fpo_post_office = $request->fpo_post_office;
        $fpo->fpo_office_pin_code = $request->fpo_office_pin_code;
        $fpo->bank_name = $request->bank_name;
        $fpo->bank_branch_name = $request->bank_branch_name;
        $fpo->ifsc_code = $request->ifsc_code;
        $fpo->bank_acc_no = $request->bank_acc_no;
        $fpo->name_ca = $request->name_ca;
        $fpo->mobile_ca = $request->mobile_ca;
        $fpo->email_ca = $request->email_ca;
        $fpo->status_ceo_appointment = $request->status_ceo_appointment;
        $fpo->ceo_appointment_date = $request->ceo_appointment_date;
        $fpo->fpo_ceo_name = $request->fpo_ceo_name;
        $fpo->fpo_ceo_mobile = $request->fpo_ceo_mobile;
        $fpo->fpo_ceo_email = $request->fpo_ceo_email;
        $fpo->status_acc_appointment = $request->status_acc_appointment;
        $fpo->accountant_appointment_date = $request->accountant_appointment_date;
        $fpo->fpo_accountant_name = $request->fpo_accountant_name;
        $fpo->fpo_accountant_mobile = $request->fpo_accountant_mobile;
        $fpo->fpo_Accountant_email = $request->fpo_Accountant_email;
        $fpo->no_small_farmers_as_shareholders = $request->no_small_farmers_as_shareholders;
        $fpo->no_marginal_farmers_as_shareholders = $request->no_marginal_farmers_as_shareholders;
        $fpo->no_landless_shareholder_farmers = $request->no_landless_shareholder_farmers;
        $fpo->no_tenant_farmers = $request->no_tenant_farmers;
        $fpo->total_shareholders = $request->total_shareholders;
        $fpo->no_women_shareholders = $request->no_women_shareholders;
        $fpo->no_scheduled_caste_shareholders = $request->no_scheduled_caste_shareholders;
        $fpo->no_scheduled_tribe_shareholders = $request->no_scheduled_tribe_shareholders;
        $fpo->authorized_shared_capital = $request->authorized_shared_capital;
        $fpo->additional_shares_issued_by_fpo = $request->additional_shares_issued_by_fpo;
        $fpo->date_issue_additional_shares = $request->date_issue_additional_shares;
        $fpo->utilisation_equity_grant = $request->utilisation_equity_grant;
        $fpo->revenue_FY_22_21 = $request->revenue_FY_22_21;
        $fpo->business_activities_fy_22_21 = $request->business_activities_fy_22_21;
        $fpo->no_farmers_benefitted_22_21 = $request->no_farmers_benefitted_22_21;
        $fpo->net_profit_22_21 = $request->net_profit_22_21;
        $fpo->revenue_fy_221_22 = $request->revenue_fy_221_22;
        $fpo->busines_activities_fy_221_22 = $request->busines_activities_fy_221_22;
        $fpo->no_farmers_bnefitted_221_22 = $request->no_farmers_bnefitted_221_22;
        $fpo->net_profit_221_22 = $request->net_profit_221_22;
        $fpo->revenue_FY_222_23 = $request->revenue_FY_222_23;
        $fpo->business_activities_FY_222_23 = $request->business_activities_FY_222_23;
        $fpo->no_farmers_benefitted_222_23 = $request->no_farmers_benefitted_222_23;
        $fpo->net_profit_222_23 = $request->net_profit_222_23;
        $fpo->overall_turnover_since_inception = $request->overall_turnover_since_inception;
        $fpo->institution_availed = $request->institution_availed;
        $fpo->utilisation_loan = $request->utilisation_loan;
        $fpo->activities_which_CGF_utilised = $request->activities_which_CGF_utilised;
        $fpo->total_area_covered_kharif = $request->total_area_covered_kharif;
        $fpo->total_area_covered_rabi = $request->total_area_covered_rabi;
        $fpo->registered_e_nam = $request->registered_e_nam;
        $fpo->userid_e_nam = $request->userid_e_nam;
        $fpo->board_meeting_held = $request->board_meeting_held;
        $fpo->date_last_board_meeting = $request->date_last_board_meeting;
        $fpo->obtained_commencement_bussiness_certificate = $request->obtained_commencement_bussiness_certificate;
        $fpo->date_commencement_business_certi = $request->date_commencement_business_certi;
        $fpo->business_certificate_from = $request->business_certificate_from;
        $fpo->obtained_seed_license = $request->obtained_seed_license;
        $fpo->date_seed_license = $request->date_seed_license;
        $fpo->seed_license_issuing_authority = $request->seed_license_issuing_authority;
        $fpo->obtained_fertilizer_license = $request->obtained_fertilizer_license;
        $fpo->date_fertilizer_license = $request->date_fertilizer_license;
        $fpo->fertilizer_license_issuing_authority = $request->fertilizer_license_issuing_authority;
        $fpo->crop_chemical_license = $request->crop_chemical_license;
        $fpo->date_crop_chemical_license = $request->date_crop_chemical_license;
        $fpo->crop_chemical_license_issuing_authority = $request->crop_chemical_license_issuing_authority;
        $fpo->mandi_license = $request->mandi_license;
        $fpo->date_mandi_license = $request->date_mandi_license;
        $fpo->mandi_license_issuing_authority = $request->mandi_license_issuing_authority;
        $fpo->fssai_liicense = $request->fssai_liicense;
        $fpo->date_fssai_license = $request->date_fssai_license;
        $fpo->fssai_liicense_issuing_authority = $request->fssai_liicense_issuing_authority;
        $fpo->block_De_allocated_cbbo = $request->block_De_allocated_cbbo;
        $fpo->old_bock = $request->old_bock;
        $fpo->cbbo_contactperson = $request->cbbo_contactperson;
        $fpo->cbbo_conatct = $request->cbbo_conatct;
        $fpo->cbbo_email = $request->cbbo_email;
        $fpo->dpr_receiving_date = $request->dpr_receiving_date;
        $fpo->dpr_reviewed = $request->dpr_reviewed;
        $fpo->dpr_score = $request->dpr_score;
        $fpo->dpr_review_submission_date = $request->dpr_review_submission_date;
        $fpo->no_training_conducted_ceo = $request->no_training_conducted_ceo;
        $fpo->no_bods_involved_training = $request->no_bods_involved_training;
        $fpo->no__training_conducted_bods = $request->no__training_conducted_bods;
        $fpo->no_training_conducted_accountants = $request->no_training_conducted_accountants;
        $fpo->no_training_completed_for_fpo_farmers = $request->no_training_completed_for_fpo_farmers;
        $fpo->no_shareholder_farmers_involved_training = $request->no_shareholder_farmers_involved_training;
        $fpo->no_fpo_members_involved_training = $request->no_fpo_members_involved_training;
        $fpo->no_trainings_conducted = $request->no_trainings_conducted;
        $fpo->created_by = $request->created_by;
        $fpo->save();
        return redirect(route('view-FPO'))->with('status', 'FPO Added Successfully');
    }

   
}
