@include('component.table-header')
@include('component.sidebar')

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper formBack">


  <section class="content-header">
    <div class="container-fluid bg-white rounded p-0 mt-0">

  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12  ">
          <div class="card">

            <div class="card shadow-none">
              <div class="card-header newHead">
                <h3 class="card-title" style="font-weight: bold;">
                  FPO Details
                </h3>
              </div>
              @if(session()->has('status'))
              <div class="alert my-3 p-3 alert-success">
                {{session('status')}}
              </div>
              @endif
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>State</th>
                      <th>District</th>
                      <th>Block</th>
                      <th>Implementing Agency</th>
                      <th>State Category</th>
                      <th>IA Allocation Year</th>
                      <th>Allocation Year CBBO</th>

                      <th>District Code</th>
                      <th>District Name LGD</th>
                      <th>Block Code</th>
                      <th>Block Name LGD</th>
                      <th>Allocation Category</th>
                      <th>Is ASPIRE District</th>
                      <th>Is Tribal District</th>
                      <th>Type Promotion Agency</th>
                      <th>CBBO</th>
                      <th>CBBO UID</th>
                      <th>DMC Approve</th>
                      <th>Allocation Category Type</th>
                      <th>ODOP</th>
                      <th>ODOP Crop</th>
                      <th>Primary Crop Approve DMC</th>
                      <th>Primary Crop</th>
                      <th>Secondary Crop Approve DMC</th>
                      <th>Secondary Crop</th>
                      <th>Status Baseline Survey</th>
                      <th>Status Board Member Identification</th>
                      <th>FPO Register</th>
                      <th>FPO</th>
                      <th>FPO Regs No</th>
                      <th>Regis Act</th>
                      <th>Date Incorporation</th>
                      <th>FPO Intervention Crops</th>
                      <th>Additional Services Proposed by FPO</th>
                      <th>Udyog Aadhaar Available</th>
                      <th>FPO Udyog Aadhaar</th>
                      <th>FPO Udyog Aadhaar Date</th>
                      <th>FPO TAN Number</th>
                      <th>FPO PAN Number</th>
                      <th>FPO Office Address</th>
                      <th>FPO Office Village</th>
                      <th>FPO Post Office</th>
                      <th>FPO Office Pin Code</th>
                      <th>Bank Name</th>
                      <th>Bank Branch Name</th>
                      <th>IFSC Code</th>
                      <th>Bank Account Number</th>
                      <th>Name CA</th>
                      <th>Mobile CA</th>
                      <th>Email CA</th>
                      <th>Status CEO Appointment</th>
                      <th>CEO Appointment Date</th>
                      <th>FPO CEO Name</th>
                      <th>FPO CEO Mobile</th>
                      <th>FPO CEO Email</th>
                      <th>Status Accountant Appointment</th>
                      <th>Accountant Appointment Date</th>
                      <th>FPO Accountant Name</th>
                      <th>FPO Accountant Mobile</th>
                      <th>FPO Accountant Email</th>
                      <th>No Small Farmers as Shareholders</th>
                      <th>No Marginal Farmers as Shareholders</th>
                      <th>No Landless Shareholder Farmers</th>
                      <th>No Tenant Farmers</th>
                      <th>Total Shareholders</th>
                      <th>No Women Shareholders</th>
                      <th>No Scheduled Caste Shareholders</th>
                      <th>No Scheduled Tribe Shareholders</th>
                      <th>Authorized Shared Capital</th>
                      <th>Additional Shares Issued by FPO</th>
                      <th>Date Issue Additional Shares</th>
                      <th>Utilization Equity Grant</th>
                      <th>Revenue FY 22/21</th>
                      <th>Business Activities FY 22/21</th>
                      <th>No Farmers Benefitted 22/21</th>
                      <th>Net Profit 22/21</th>
                      <th>Revenue FY 221/22</th>
                      <th>Business Activities FY 221/22</th>
                      <th>No Farmers Benefitted 221/22</th>
                      <th>Net Profit 221/22</th>
                      <th>Revenue FY 222/23</th>
                      <th>Business Activities FY 222/23</th>
                      <th>No Farmers Benefitted 222/23</th>
                      <th>Net Profit 222/23</th>
                      <th>Overall Turnover Since Inception</th>
                      <th>Institution Availed</th>
                      <th>Utilization Loan</th>
                      <th>Activities which CGF Utilized</th>
                      <th>Total Area Covered Kharif</th>
                      <th>Total Area Covered Rabi</th>
                      <th>Registered E-NAM</th>
                      <th>UserID E-NAM</th>
                      <th>Board Meeting Held</th>
                      <th>Date Last Board Meeting</th>
                      <th>Obtained Commencement of Business Certificate</th>
                      <th>Date Commencement Business Certificate</th>
                      <th>Business Certificate From</th>
                      <th>Obtained Seed License</th>
                      <th>Date Seed License</th>
                      <th>Seed License Issuing Authority</th>
                      <th>Obtained Fertilizer License</th>
                      <th>Date Fertilizer License</th>
                      <th>Fertilizer License Issuing Authority</th>
                      <th>Crop Chemical License</th>
                      <th>Date Crop Chemical License</th>
                      <th>Crop Chemical License Issuing Authority</th>
                      <th>Mandi License</th>
                      <th>Date Mandi License</th>
                      <th>Mandi License Issuing Authority</th>
                      <th>FSSAI License</th>
                      <th>Date FSSAI License</th>
                      <th>FSSAI License Issuing Authority</th>
                      <th>Block Deallocated CBBO</th>
                      <th>Old Block</th>
                      <th>CBBO Contact Person</th>
                      <th>CBBO Contact</th>
                      <th>CBBO Email</th>
                      <th>DPS Receiving Date</th>
                      <th>DPR Reviewed</th>
                      <th>DPR Score</th>
                      <th>DPR Review Submission Date</th>
                      <th>No Training Conducted CEO</th>
                      <th>No BODs Involved Training</th>
                      <th>No Training Conducted BODs</th>
                      <th>No Training Completed for FPO Accountants</th>
                      <th>No Training Completed for FPO Farmers</th>
                      <th>No Shareholder Farmers Involved in Training</th>
                      <th>No FPO Members Involved in Training</th>
                      <th>No Trainings Conducted</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1 ?>


                    @foreach($fpo as $fpos)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td><a href="{{route('FPO-state', ['state' => $fpos->state]) }}">{{$fpos->state }}</a></td>
                      <td>{{ $fpos->district }}</td>
                      <td>{{ $fpos->block }}</td>
                      <td>{{ $fpos->implementing_agency }}</td>
                      <td>{{ $fpos->state_category }}</td>
                      <td>{{ $fpos->ia_alloc_yr }}</td>
                      <td>{{ $fpos->alloc_yr_cbbo }}</td>

                      <td>{{ $fpos->district_code }}</td>
                      <td>{{ $fpos->district_name_lgd }}</td>
                      <td>{{ $fpos->block_code }}</td>
                      <td>{{ $fpos->block_name_lgd }}</td>
                      <td>{{ $fpos->alloc_category }}</td>
                      <td>{{ $fpos->is_aspire_district }}</td>
                      <td>{{ $fpos->is_tribal_district }}</td>
                      <td>{{ $fpos->type_promo_agency }}</td>
                      <td>{{ $fpos->cbbo }}</td>
                      <td>{{ $fpos->cbbo_uid }}</td>
                      <td>{{ $fpos->dmc_approve }}</td>
                      <td>{{ $fpos->alloc_catgory_type }}</td>
                      <td>{{ $fpos->odop }}</td>
                      <td>{{ $fpos->odop_crop }}</td>
                      <td>{{ $fpos->primary_crop_approve_dmc }}</td>
                      <td>{{ $fpos->primary_crop }}</td>
                      <td>{{ $fpos->secondary_crop_approve_dmc }}</td>
                      <td>{{ $fpos->secondary_crop }}</td>
                      <td>{{ $fpos->status_baseline_survey }}</td>
                      <td>{{ $fpos->status_board_member_identification }}</td>
                      <td>{{ $fpos->fpo_register }}</td>
                      <td>{{ $fpos->fpo }}</td>
                      <td>{{ $fpos->fpo_regs_no }}</td>
                      <td>{{ $fpos->regis_act }}</td>
                      <td>{{ $fpos->date_Incorporation }}</td>
                      <td>{{ $fpos->fpo_intervention_crops }}</td>
                      <td>{{ $fpos->additional_services_proposed_by_FPO }}</td>
                      <td>{{ $fpos->udyog_aadhaar_available }}</td>
                      <td>{{ $fpos->fpo_udyog_aadhaar }}</td>
                      <td>{{ $fpos->fpo_udyog_aadhaar_date }}</td>
                      <td>{{ $fpos->fpo_tan_number }}</td>
                      <td>{{ $fpos->fpo_pan_number }}</td>
                      <td>{{ $fpos->fpo_office_address }}</td>
                      <td>{{ $fpos->fpo_office_village }}</td>
                      <td>{{ $fpos->fpo_post_office }}</td>
                      <td>{{ $fpos->fpo_office_pin_code }}</td>
                      <td>{{ $fpos->bank_name }}</td>
                      <td>{{ $fpos->bank_branch_name }}</td>
                      <td>{{ $fpos->ifsc_code }}</td>
                      <td>{{ $fpos->bank_acc_no }}</td>
                      <td>{{ $fpos->name_ca }}</td>
                      <td>{{ $fpos->mobile_ca }}</td>
                      <td>{{ $fpos->email_ca }}</td>
                      <td>{{ $fpos->status_ceo_appointment }}</td>
                      <td>{{ $fpos->ceo_appointment_date }}</td>
                      <td>{{ $fpos->fpo_ceo_name }}</td>
                      <td>{{ $fpos->fpo_ceo_mobile }}</td>
                      <td>{{ $fpos->fpo_ceo_email }}</td>
                      <td>{{ $fpos->status_acc_appointment }}</td>
                      <td>{{ $fpos->accountant_appointment_date }}</td>
                      <td>{{ $fpos->fpo_accountant_name }}</td>
                      <td>{{ $fpos->fpo_accountant_mobile }}</td>
                      <td>{{ $fpos->fpo_Accountant_email }}</td>
                      <td>{{ $fpos->no_small_farmers_as_shareholders }}</td>
                      <td>{{ $fpos->no_marginal_farmers_as_shareholders }}</td>
                      <td>{{ $fpos->no_landless_shareholder_farmers }}</td>
                      <td>{{ $fpos->no_tenant_farmers }}</td>
                      <td>{{ $fpos->total_shareholders }}</td>
                      <td>{{ $fpos->no_women_shareholders }}</td>
                      <td>{{ $fpos->no_scheduled_caste_shareholders }}</td>
                      <td>{{ $fpos->no_scheduled_tribe_shareholders }}</td>
                      <td>{{ $fpos->authorized_shared_capital }}</td>
                      <td>{{ $fpos->additional_shares_issued_by_fpo }}</td>
                      <td>{{ $fpos->date_issue_additional_shares }}</td>
                      <td>{{ $fpos->utilisation_equity_grant }}</td>
                      <td>{{ $fpos->revenue_FY_22_21 }}</td>
                      <td>{{ $fpos->business_activities_fy_22_21 }}</td>
                      <td>{{ $fpos->no_farmers_benefitted_22_21 }}</td>
                      <td>{{ $fpos->net_profit_22_21 }}</td>
                      <td>{{ $fpos->revenue_fy_221_22 }}</td>
                      <td>{{ $fpos->busines_activities_fy_221_22 }}</td>
                      <td>{{ $fpos->no_farmers_bnefitted_221_22 }}</td>
                      <td>{{ $fpos->net_profit_221_22 }}</td>
                      <td>{{ $fpos->revenue_FY_222_23 }}</td>
                      <td>{{ $fpos->business_activities_FY_222_23 }}</td>
                      <td>{{ $fpos->no_farmers_benefitted_222_23 }}</td>
                      <td>{{ $fpos->net_profit_222_23 }}</td>
                      <td>{{ $fpos->overall_turnover_since_inception }}</td>
                      <td>{{ $fpos->institution_availed }}</td>
                      <td>{{ $fpos->utilisation_loan }}</td>
                      <td>{{ $fpos->activities_which_CGF_utilised }}</td>
                      <td>{{ $fpos->total_area_covered_kharif }}</td>
                      <td>{{ $fpos->total_area_covered_rabi }}</td>
                      <td>{{ $fpos->registered_e_nam }}</td>
                      <td>{{ $fpos->userid_e_nam }}</td>
                      <td>{{ $fpos->board_meeting_held }}</td>
                      <td>{{ $fpos->date_last_board_meeting }}</td>
                      <td>{{ $fpos->obtained_commencement_bussiness_certificate }}</td>
                      <td>{{ $fpos->date_commencement_business_certi }}</td>
                      <td>{{ $fpos->business_certificate_from }}</td>
                      <td>{{ $fpos->obtained_seed_license }}</td>
                      <td>{{ $fpos->date_seed_license }}</td>
                      <td>{{ $fpos->seed_license_issuing_authority }}</td>
                      <td>{{ $fpos->obtained_fertilizer_license }}</td>
                      <td>{{ $fpos->date_fertilizer_license }}</td>
                      <td>{{ $fpos->fertilizer_license_issuing_authority }}</td>
                      <td>{{ $fpos->crop_chemical_license }}</td>
                      <td>{{ $fpos->date_crop_chemical_license }}</td>
                      <td>{{ $fpos->crop_chemical_license_issuing_authority }}</td>
                      <td>{{ $fpos->mandi_license }}</td>
                      <td>{{ $fpos->date_mandi_license }}</td>
                      <td>{{ $fpos->mandi_license_issuing_authority }}</td>
                      <td>{{ $fpos->fssai_liicense }}</td>
                      <td>{{ $fpos->date_fssai_license }}</td>
                      <td>{{ $fpos->fssai_liicense_issuing_authority }}</td>
                      <td>{{ $fpos->block_De_allocated_cbbo }}</td>
                      <td>{{ $fpos->old_bock }}</td>
                      <td>{{ $fpos->cbbo_contactperson }}</td>
                      <td>{{ $fpos->cbbo_conatct }}</td>
                      <td>{{ $fpos->cbbo_email }}</td>
                      <td>{{ $fpos->dpr_receiving_date }}</td>
                      <td>{{ $fpos->dpr_reviewed }}</td>
                      <td>{{ $fpos->dpr_score }}</td>
                      <td>{{ $fpos->dpr_review_submission_date }}</td>
                      <td>{{ $fpos->no_training_conducted_ceo }}</td>
                      <td>{{ $fpos->no_bods_involved_training }}</td>
                      <td>{{ $fpos->no__training_conducted_bods }}</td>
                      <td>{{ $fpos->no_training_conducted_accountants}}</td>
                      <td>{{ $fpos->no_training_completed_for_fpo_farmers }}</td>
                      <td>{{ $fpos->no_shareholder_farmers_involved_training }}</td>
                      <td>{{ $fpos->no_fpo_members_involved_training }}</td>
                      <td>{{ $fpos->no_trainings_conducted }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- / Content -->

<!-- Footer -->

@include('component.table-footer')