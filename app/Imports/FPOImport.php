<?php

namespace App\Imports;

use App\Models\FPO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class FPOImport implements ToModel, WithStartRow
{
    private $savedCount;

    public function __construct()
    {
        $this->savedCount = 0;
    }
    public function startRow(): int
    {
        return 2; // Skip the first row (header row)
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $fpo =new FPO([
            'implementing_agency' => $row[0],
            'state_category' => $row[1],
            'ia_alloc_yr' => $row[2],
            'alloc_yr_cbbo' => $row[3],
            'state' => $row[4],
            'district' => $row[5],
            'block' => $row[6],
            'district_code' => $row[7],
            'district_name_lgd' => $row[8],
            'block_code' => $row[9],
            'block_name_lgd' => $row[10],
            'alloc_category' => $row[11],
            'is_aspire_district' => $row[12],
            'is_tribal_district' => $row[13],
            'type_promo_agency' => $row[14],
            'cbbo' => $row[15],
            'cbbo_uid' => $row[16],
            'dmc_approve' => $row[17],
            'alloc_catgory_type' => $row[18],
            'odop' => $row[19],
            'odop_crop' => $row[20],
            'primary_crop_approve_dmc' => $row[21],
            'primary_crop' => $row[22],
            'secondary_crop_approve_dmc' => $row[23],
            'secondary_crop' => $row[24],
            'status_baseline_survey' => $row[25],
            'status_board_member_identification' => $row[26],
            'fpo_register' => $row[27],
            'fpo' => $row[28],
            'fpo_regs_no' => $row[29],
            'regis_act' => $row[30],
            'date_Incorporation' => $row[31],
            'fpo_intervention_crops' => $row[32],
            'additional_services_proposed_by_FPO' => $row[33],
            'udyog_aadhaar_available' => $row[34],
            'fpo_udyog_aadhaar' => $row[35],
            'fpo_udyog_aadhaar_date' => $row[36],
            'fpo_tan_number' => $row[37],
            'fpo_pan_number' => $row[38],
            'fpo_office_address' => $row[39],
            'fpo_office_village' => $row[40],
            'fpo_post_office' => $row[41],
            'fpo_office_pin_code' => $row[42],
            'bank_name' => $row[43],
            'bank_branch_name' => $row[44],
            'ifsc_code' => $row[45],
            'bank_acc_no' => $row[46],
            'name_ca' => $row[47],
            'mobile_ca' => $row[48],
            'email_ca' => $row[49],
            'status_ceo_appointment' => $row[50],
            'ceo_appointment_date' => $row[51],
            'fpo_ceo_name' => $row[52],
            'fpo_ceo_mobile' => $row[53],
            'fpo_ceo_email' => $row[54],
            'status_acc_appointment' => $row[55],
            'accountant_appointment_date' => $row[56],
            'fpo_accountant_name' => $row[57],
            'fpo_accountant_mobile' => $row[58],
            'fpo_Accountant_email' => $row[59],
            'no_small_farmers_as_shareholders' => $row[60],
            'no_marginal_farmers_as_shareholders' => $row[61],
            'no_landless_shareholder_farmers' => $row[62],
            'no_tenant_farmers' => $row[63],
            'total_shareholders' => $row[64],
            'no_women_shareholders' => $row[65],
            'no_scheduled_caste_shareholders' => $row[66],
            'no_scheduled_tribe_shareholders' => $row[67],
            'authorized_shared_capital' => $row[68],
            'additional_shares_issued_by_fpo' => $row[69],
            'date_issue_additional_shares' => $row[70],
            'utilisation_equity_grant' => $row[71],
            'revenue_FY_22_21' => $row[72],
            'business_activities_fy_22_21' => $row[73],
            'no_farmers_benefitted_22_21' => $row[74],
            'net_profit_22_21' => $row[75],
            'revenue_fy_221_22' => $row[76],
            'busines_activities_fy_221_22' => $row[77],
            'no_farmers_bnefitted_221_22' => $row[78],
            'net_profit_221_22' => $row[79],
            'revenue_FY_222_23' => $row[80],
            'business_activities_FY_222_23' => $row[81],
            'no_farmers_benefitted_222_23' => $row[82],
            'net_profit_222_23' => $row[83],
            'overall_turnover_since_inception' => $row[84],
            'institution_availed' => $row[85],
            'utilisation_loan' => $row[86],
            'activities_which_CGF_utilised' => $row[87],
            'total_area_covered_kharif' => $row[88],
            'total_area_covered_rabi' => $row[89],
            'registered_e_nam' => $row[90],
            'userid_e_nam' => $row[91],
            'board_meeting_held' => $row[92],
            'date_last_board_meeting' => $row[93],
            'obtained_commencement_bussiness_certificate' => $row[94],
            'date_commencement_business_certi' => $row[95],
            'business_certificate_from' => $row[96],
            'obtained_seed_license' => $row[97],
            'date_seed_license' => $row[98],
            'seed_license_issuing_authority' => $row[99],
            'obtained_fertilizer_license' => $row[100],
            'date_fertilizer_license' => $row[101],
            'fertilizer_license_issuing_authority' => $row[102],
            'crop_chemical_license' => $row[103],
            'date_crop_chemical_license' => $row[104],
            'crop_chemical_license_issuing_authority' => $row[105],
            'mandi_license' => $row[106],
            'date_mandi_license' => $row[107],
            'mandi_license_issuing_authority' => $row[108],
            'fssai_liicense' => $row[109],
            'date_fssai_license' => $row[110],
            'fssai_liicense_issuing_authority' => $row[111],
            'block_De_allocated_cbbo' => $row[112],
            'old_bock' => $row[113],
            'cbbo_contactperson' => $row[114],
            'cbbo_conatct' => $row[115],
            'cbbo_email' => $row[116],
            'dpr_receiving_date' => $row[117],
            'dpr_reviewed' => $row[118],
            'dpr_score' => $row[119],
            'dpr_review_submission_date' => $row[120],
            'no_training_conducted_ceo' => $row[121],
            'no_bods_involved_training' => $row[122],
            'no__training_conducted_bods' => $row[123],
            'no_training_conducted_accountants' => $row[124],
            'no_training_completed_for_fpo_farmers' => $row[125],
            'no_shareholder_farmers_involved_training' => $row[126],
            'no_fpo_members_involved_training' => $row[127],
            'no_trainings_conducted' => $row[128],
            'created_by' => 1111,
        ]);
        if ($fpo->save()) {
            $this->savedCount++;
        }

        return $fpo;
    }

    public function getSavedCount()
    {
        return $this->savedCount;
    }
    }

