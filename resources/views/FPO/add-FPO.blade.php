@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default mt-4">
                <div class="card-header newHead">
                    <h3 class="card-title text-bold">Add FPO</h3>
                </div>
                <form action="{{route('save-FPO')}}" method="POST">
                    @csrf 
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">The field labels marked with * are required input fields.</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="implementing_agency">Implementing Agency *</label>
                                <input type="text" name="implementing_agency" id="implementing_agency" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="state_category">State Category *</label>
                                <input type="text" name="state_category" id="state_category" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="ia_allocation_year">IA Allocation year *</label>
                                <input type="text" name="ia_alloc_yr" id="ia_alloc_yr" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="allocation_year_to_cbbo">Allocation Year to CBBO *</label>
                                <input type="text" name="alloc_yr_cbbo" id="allocation_year_to_cbbo" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="state">State *</label>
                                <input type="text" name="state" id="state" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="district">District *</label>
                                <input type="text" name="district" id="district" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="block">Block *</label>
                                <input type="text" name="block" id="block" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="district_code">District Code *</label>
                                <input type="text" name="district_code" id="district_code" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="district_name_lgd">District Name LGD *</label>
                                <input type="text" name="district_name_lgd" id="district_name_lgd" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="block_code">Block Code *</label>
                                <input type="text" name="block_code" id="block_code" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="block_name_lgd">Block Name LGD *</label>
                                <input type="text" name="block_name_lgd" id="block_name_lgd" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="allocation_category">Allocation Category *</label>
                                <input type="text" name="alloc_category" id="allocation_category" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="is_aspirational_district">Is Aspirational District *</label>
                                <select name="is_aspire_district" id="is_aspirational_district" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="is_tribal_district">Is Tribal District *</label>
                                <select name="is_tribal_district" id="is_tribal_district" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="type_promo_agency">Type of Promotion Agency *</label>
                                <input type="text" name="type_of_promotion_agency" id="type_of_promotion_agency" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="cbbo">CBBO Name *</label>
                                <input type="text" name="cbbo" id="cbbo_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="cbbo_uid">CBBO Unique ID *</label>
                                <input type="text" name="cbbo_uid" id="cbbo_unique_id" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="dmc_approve">DMC Approval Status *</label>
                                <input type="text" name="dmc_approve" id="dmc_approval_status" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="alloc_catgory_type">Allocation Category Type *</label>
                                <input type="text" name="alloc_catgory_type" id="allocation_category_type" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="odop">ODOP *</label>
                                <input type="text" name="odop" id="odop" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="odop_crop">Doing ODOP Crop *</label>
                                <input type="text" name="odop_crop" id="doing_odop_crop" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="primary_crop_approve_dmc">Primary Crop Approved by DMC *</label>
                                <input type="text" name="primary_crop_approve_dmc" id="primary_crop_dmc_approved" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="primary_crop">Primary Crop *</label>
                                <input type="text" name="primary_crop" id="primary_crop" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="secondary_crop_approve_dmc">Secondary Crop Approved by DMC *</label>
                                <input type="text" name="secondary_crop_approve_dmc" id="secondary_crop_dmc_approved" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="secondary_crop">Secondary Crop *</label>
                                <input type="text" name="secondary_crop" id="secondary_crop" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="status_baseline_survey">Status of Baseline Survey *</label>
                                <input type="text" name="status_baseline_survey" id="baseline_survey_status" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="status_board_member_identification">Status Board Member Identification *</label>
                                <input type="text" name="status_board_member_identification" id="status_board_member_identification" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_register">FPO Registered *</label>
                                <input type="text" name="fpo_register" id="fpo_registered" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo">FPO Name *</label>
                                <input type="text" name="fpo" id="fpo_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_regs_no">FPO Registration No. *</label>
                                <input type="text" name="fpo_regs_no" id="fpo_registration_no" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="regis_act">Registration ACT *</label>
                                <input type="text" name="regis_act" id="registration_act" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_Incorporation">Date of Incorporation *</label>
                                <input type="date" name="date_Incorporation" id="date_of_incorporation" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_intervention_crops">FPO Intervention Crops *</label>
                                <input type="text" name="fpo_intervention_crops" id="fpo_intervention_crops" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="additional_services_proposed_by_FPO">Additional Services proposed by FPO *</label>
                                <input type="text" name="additional_services_proposed_by_FPO" id="additional_services_proposed_by_fpo" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="udyog_aadhaar_available">Udyog Aadhaar available *</label>
                                <input type="text" name="udyog_aadhaar_available" id="udyog_aadhaar_available" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_udyog_aadhaar">FPO Udyog Aadhaar *</label>
                                <input type="text" name="fpo_udyog_aadhaar" id="fpo_udyog_aadhaar" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_udyog_aadhaar_date">FPO Udyog Aadhaar Date *</label>
                                <input type="date" name="fpo_udyog_aadhaar_date" id="fpo_udyog_aadhaar_date" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_tan_number">FPO TAN Number *</label>
                                <input type="text" name="fpo_tan_number" id="fpo_tan_number" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_pan_number">FPO PAN Number *</label>
                                <input type="text" name="fpo_pan_number" id="fpo_pan_number" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_office_address">FPO Office Address (Building/Shop No. with Street Name) *</label>
                                <input type="text" name="fpo_office_address" id="fpo_office_address" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_office_village">FPO Office Village Name *</label>
                                <input type="text" name="fpo_office_village" id="fpo_office_village_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_post_office">FPO Post Office *</label>
                                <input type="text" name="fpo_post_office" id="fpo_post_office" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_office_pin_code">FPO Office PIN Code *</label>
                                <input type="text" name="fpo_office_pin_code" id="fpo_office_pin_code" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="bank_name">Bank Name *</label>
                                <input type="text" name="bank_name" id="bank_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="bank_branch_name">Bank Branch Name *</label>
                                <input type="text" name="bank_branch_name" id="bank_branch_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="ifsc_code">IFSC Code *</label>
                                <input type="text" name="ifsc_code" id="ifsc_code" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="bank_acc_no">Bank Account Number *</label>
                                <input type="text" name="bank_acc_no" id="bank_account_number" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="name_ca">Name of CA (First Name Last Name SurName) *</label>
                                <input type="text" name="name_ca" id="name_of_ca" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="mobile_ca">Mobile Number of CA *</label>
                                <input type="text" name="mobile_ca" id="mobile_number_of_ca" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="email_ca">Email Id of CA *</label>
                                <input type="email" name="email_ca" id="email_id_of_ca" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="status_ceo_appointment">Status CEO Appointment *</label>
                                <input type="text" name="status_ceo_appointment" id="status_ceo_appointment" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="ceo_appointment_date">CEO Appointment Date *</label>
                                <input type="date" name="ceo_appointment_date" id="ceo_appointment_date" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_ceo_name">FPO CEO Name (First Name Last Name SurName) *</label>
                                <input type="text" name="fpo_ceo_name" id="fpo_ceo_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_ceo_mobile">FPO CEO Mobile No. *</label>
                                <input type="text" name="fpo_ceo_mobile" id="fpo_ceo_mobile_no" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_ceo_email">FPO CEO Email Id *</label>
                                <input type="email" name="fpo_ceo_email" id="fpo_ceo_email_id" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="status_acc_appointment">Status Accountant Appointment *</label>
                                <input type="text" name="status_acc_appointment" id="status_accountant_appointment" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="accountant_appointment_date">Accountant Appointment Date *</label>
                                <input type="date" name="accountant_appointment_date" id="accountant_appointment_date" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_accountant_name">FPO Accountant Name *</label>
                                <input type="text" name="fpo_accountant_name" id="fpo_accountant_name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_accountant_mobile_no">FPO Accountant Mobile No. *</label>
                                <input type="text" name="fpo_accountant_mobile" id="fpo_accountant_mobile_no" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fpo_accountant_email_id">FPO Accountant Email Id *</label>
                                <input type="email" name="fpo_Accountant_email" id="fpo_accountant_email_id" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_small_farmers_as_shareholders">No Of Small Farmers as shareholders *</label>
                                <input type="text" name="no_small_farmers_as_shareholders" id="no_of_small_farmers" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_marginal_farmers_as_shareholders">No Of Marginal farmers as shareholders *</label>
                                <input type="text" name="no_marginal_farmers_as_shareholders" id="no_of_marginal_farmers" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_landless_shareholder_farmers">No of Landless shareholder farmers *</label>
                                <input type="text" name="no_landless_shareholder_farmers" id="no_of_landless_shareholder_farmers" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_tenant_farmers">No Of Tenant Farmers *</label>
                                <input type="text" name="no_tenant_farmers" id="no_of_tenant_farmers" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="total_shareholders">Total shareholders *</label>
                                <input type="text" name="total_shareholders" id="total_shareholders" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_of_women_shareholders">No. of Women shareholders *</label>
                                <input type="text" name="no_women_shareholders" id="no_of_women_shareholders" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_of_scheduled_caste_shareholders">No of Scheduled Caste (SC) shareholders *</label>
                                <input type="text" name="no_scheduled_caste_shareholders" id="no_of_scheduled_caste_shareholders" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_of_scheduled_tribe_shareholders">No of Scheduled Tribe (ST) shareholders *</label>
                                <input type="text" name="no_scheduled_tribe_shareholders" id="no_of_scheduled_tribe_shareholders" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="authorized_shared_capital">Authorized Shared Capital *</label>
                                <input type="text" name="authorized_shared_capital" id="authorized_shared_capital" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="additional_shares_issued_by_fpo">Additional shares issued by FPO *</label>
                                <input type="text" name="additional_shares_issued_by_fpo" id="additional_shares_issued_by_fpo" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_of_issue_of_additional_shares">Date of issue of additional shares *</label>
                                <input type="date" name="date_issue_additional_shares" id="date_of_issue_of_additional_shares" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="utilisation_equity_grant">Utilisation of Equity Grant *</label>
                                <input type="text" name="utilisation_equity_grant" id="utilisation_of_equity_grant" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="revenue_FY_22_21">Revenue (FY 22-21) *</label>
                                <input type="text" name="revenue_FY_22_21" id="revenue_fy_22_21" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="business_activities_fy_22_21">Business Activities (FY 22-21) *</label>
                                <input type="text" name="business_activities_fy_22_21" id="business_activities_fy_22_21" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_farmers_benefitted_22_21">No. of Farmers Benefitted (22-21) *</label>
                                <input type="text" name="no_farmers_benefitted_22_21" id="no_of_farmers_benefitted_22_21" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="net_profit_22_21">Net Profit (22-21) (INR) *</label>
                                <input type="text" name="net_profit_22_21" id="net_profit_22_21" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="revenue_fy_221_22">Revenue (FY 221-22) *</label>
                                <input type="text" name="revenue_fy_221_22" id="revenue_fy_221_22" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="busines_activities_fy_221_22">Business Activities (FY 221-22) *</label>
                                <input type="text" name="busines_activities_fy_221_22" id="business_activities_fy_221_22" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_farmers_bnefitted_221_22">No. of Farmers Benefitted (221-22) *</label>
                                <input type="text" name="no_farmers_bnefitted_221_22" id="no_of_farmers_benefitted_221_22" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="net_profit_221_22">Net Profit (221-22) (INR) *</label>
                                <input type="text" name="net_profit_221_22" id="net_profit_221_22" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="revenue_FY_222_23">Revenue (FY 222-23) *</label>
                                <input type="text" name="revenue_FY_222_23" id="revenue_fy_222_23" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="business_activities_FY_222_23">Business Activities (FY 222-23) *</label>
                                <input type="text" name="business_activities_FY_222_23" id="business_activities_fy_222_23" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_farmers_benefitted_222_23">No. of Farmers Benefitted (222-23) *</label>
                                <input type="text" name="no_farmers_benefitted_222_23" id="no_of_farmers_benefitted_222_23" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="net_profit_222_23">Net Profit (222-23) (INR) *</label>
                                <input type="text" name="net_profit_222_23" id="net_profit_222_23" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="overall_turnover_since_inception">Overall Turnover since inception (INR) *</label>
                                <input type="text" name="overall_turnover_since_inception" id="overall_turnover_since_inception" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="institution_availed">Institution Availed *</label>
                                <input type="text" name="institution_availed" id="institution_availed" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="utilisation_loan">Utilisation of Loan *</label>
                                <input type="text" name="utilisation_loan" id="utilisation_of_loan" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="total_area_covered_kharif">Activities for which CGF Utilised *</label>
                                <input type="text" name="total_area_covered_kharif" id="activities_for_which_cgf_utilised" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="total_area_covered_rabi">Total Area Covered (Kharif) (in Ha) *</label>
                                <input type="text" name="total_area_covered_rabi" id="total_area_covered_kharif" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="total_area_covered_rabi">Total Area Covered (Rabi) (in Ha) *</label>
                                <input type="text" name="total_area_covered_rabi" id="total_area_covered_rabi" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="registered_e_nam">Registered on e-NAM *</label>
                                <input type="text" name="registered_e_nam" id="registered_on_e-nam" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="user_id_e-nam">User id e-NAM *</label>
                                <input type="text" name="userid_e_nam" id="user_id_e-nam" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="board_meeting_held">Board Meeting held *</label>
                                <input type="text" name="board_meeting_held" id="board_meeting_held" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_last_board_meeting">Date Of Last Board Meeting *</label>
                                <input type="date" name="date_last_board_meeting" id="date_of_last_board_meeting" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="obtained_commencement_of_business_certificate">Obtained Commencement of Business Certificate *</label>
                                <input type="text" name="obtained_commencement_bussiness_certificate" id="obtained_commencement_of_business_certificate" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_commencement_business_certi">Date of Commencement of Business Certificate obtained *</label>
                                <input type="date" name="date_commencement_business_certi" id="date_of_commencement_of_business_certificate_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="business_certificate_from">Business Certificate Obtained From *</label>
                                <input type="text" name="business_certificate_from" id="business_certificate_obtained_from" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="obtained_seed_license">Obtained Seed License *</label>
                                <input type="text" name="obtained_seed_license" id="obtained_seed_license" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_seed_license">Date of Seed License Obtained *</label>
                                <input type="date" name="date_seed_license" id="date_of_seed_license_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="seed_license_issuing_authority">Seed License Issuing Authority *</label>
                                <input type="text" name="seed_license_issuing_authority" id="seed_license_issuing_authority" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="obtained_fertilizer_license">Obtained Fertilizer License *</label>
                                <input type="text" name="obtained_fertilizer_license" id="obtained_fertilizer_license" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_fertilizer_license">Date of Fertilizer License Obtained *</label>
                                <input type="date" name="date_fertilizer_license" id="date_of_fertilizer_license_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fertilizer_license_issuing_authority">Fertilizer License Issuing Authority *</label>
                                <input type="text" name="fertilizer_license_issuing_authority" id="fertilizer_license_issuing_authority" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="crop_chemical_license">Obtained Crop Chemical License *</label>
                                <input type="text" name="crop_chemical_license" id="obtained_crop_chemical_license" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_crop_chemical_license">Date of Crop Chemical License Obtained *</label>
                                <input type="date" name="date_crop_chemical_license" id="date_of_crop_chemical_license_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="crop_chemical_license_issuing_authority">Crop Chemical License Issuing Authority *</label>
                                <input type="text" name="crop_chemical_license_issuing_authority" id="crop_chemical_license_issuing_authority" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="mandi_license">Obtained Mandi License *</label>
                                <input type="text" name="mandi_license" id="obtained_mandi_license" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_mandi_license">Date of Mandi License Obtained *</label>
                                <input type="date" name="date_mandi_license" id="date_of_mandi_license_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="mandi_license_issuing_authority">Mandi License Issuing Authority *</label>
                                <input type="text" name="mandi_license_issuing_authority" id="mandi_license_issuing_authority" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fssai_liicense">Obtained FSSAI License *</label>
                                <input type="text" name="fssai_liicense" id="obtained_fssai_license" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="date_fssai_license">Date of FSSAI License Obtained *</label>
                                <input type="date" name="date_fssai_license" id="date_of_fssai_license_obtained" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="fssai_liicense_issuing_authority">FSSAI License Issuing Authority *</label>
                                <input type="text" name="fssai_liicense_issuing_authority" id="fssai_license_issuing_authority" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="block_De_allocated_cbbo">Blocks De-allocated from CBBO *</label>
                                <input type="text" name="block_De_allocated_cbbo" id="blocks_de-allocated_from_cbbo" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="old_bock">Old Block *</label>
                                <input type="text" name="old_bock" id="old_block" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="cbbo_contactperson">CBBO Contact Person (First Name Middle Name SurName) *</label>
                                <input type="text" name="cbbo_contactperson" id="cbbo_contact_person" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="cbbo_conatct">CBBO Contact Number *</label>
                                <input type="text" name="cbbo_conatct" id="cbbo_contact_number" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="cbbo_email">CBBO email id *</label>
                                <input type="email" name="cbbo_email" id="cbbo_email_id" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="dpr_receiving_date">DPR Receiving Date *</label>
                                <input type="date" name="dpr_receiving_date" id="dpr_receiving_date" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="dpr_reviewed">DPR Reviewed *</label>
                                <input type="text" name="dpr_reviewed" id="dpr_reviewed" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="dpr_score">DPR Score *</label>
                                <input type="text" name="dpr_score" id="dpr_score" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="dpr_review_submission_date">DPR Review Submission Date *</label>
                                <input type="date" name="dpr_review_submission_date" id="dpr_review_submission_date" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_training_conducted_ceo">Number of Training conducted for CEO *</label>
                                <input type="text" name="no_training_conducted_ceo" id="training_conducted_for_ceo" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_bods_involved_training">Number of BoDs Involved In Training *</label>
                                <input type="text" name="no_bods_involved_training" id="number_of_bods_involved_in_training" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no__training_conducted_bods">Number of Training conducted for BODs *</label>
                                <input type="text" name="no__training_conducted_bods" id="training_conducted_for_bods" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_training_conducted_accountants">No of Training conducted for Accountants *</label>
                                <input type="text" name="no_training_conducted_accountants" id="number_of_training_for_accountants" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_training_completed_for_fpo_farmers">Number of Training Completed for FPO Farmers *</label>
                                <input type="text" name="no_training_completed_for_fpo_farmers" id="training_completed_for_fpo_farmers" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_shareholder_farmers_involved_training">Number of Shareholder farmers involved in training *</label>
                                <input type="text" name="no_shareholder_farmers_involved_training" id="number_of_shareholder_farmers_involved_in_training" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_fpo_members_involved_training">No. of FPO members involved in training *</label>
                                <input type="text" name="no_fpo_members_involved_training" id="number_of_fpo_members_involved_in_training" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="no_trainings_conducted">No. of trainings Conducted *</label>
                                <input type="text" name="no_trainings_conducted" id="no_of_trainings_conducted" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="background-color: azure;">
                        <button type="submit" class="btn text-bold mr-3" style="background-color: blue; color: white;">Submit</button>
                        <button type="reset" class="btn text-bold" style="background-color: white; border: 2px solid blue; color: blue;">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- / Content -->
<!-- Footer -->
@include("component.footer");