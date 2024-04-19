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
                 State Wise PG  Details
                </h3>
              </div>

              <div class="card-body">
                <table id="" class="table table-bordered table-striped d-block" style="overflow-x: auto">
                  <thead>
                    <tr>
                    <th>Sr No</th>
                      <th>State</th>
                      <th>District</th>
                      <th>Block</th>
                      <th>Village</th>
                      <th>Int_Producer_ID</th>
                      <th>PGroupname</th>
                      <th>Date_of_Formation</th>
                      <th>Category_Name</th>
                      <th>Commodities</th>
                      <th>Office_Address</th>
                      <th>Member_No_in_PGroup</th>
                      <th>Bank_Name</th>
                      <th>Branch_Name</th>
                      <th>SignatoryName1</th>
                      <th>SignatoryDesignation1</th>
                      <th>Commodities_[0]</th>
                      <th>Community_Cader_Name</th>
                      <th>PromotedUnderSchemeName</th>
                      <th>Financial_Month_Year</th>
                      <th>Initial_Cash_in_Hand</th>
                      <th>Initial_Cash_in_Bank</th>
                      <th>Initial_Stock_Cost</th>
                      <th>Initial_Total_Amount</th>
                      <th>Entered_MIS_Date</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1 ?>


                    @foreach($pg as $pgs)
                    <tr>
                      <td>{{ $i++ }}</td>
                     <td>{{$pgs->state }}</td>
                     <td><a href="{{route('PG-districts', ['district' => $pgs->district]) }}" >{{$pgs->district }}</a></td>
                      <td>{{ $pgs->block }}</td>
                      <td>{{ $pgs->village }}</td>
                      <td>{{ $pgs->int_producer_id }}</td>
                      <td>{{ $pgs->pgroupname }}</td>
                      <td>{{ $pgs->date_of_formation }}</td>
                      <td>{{ $pgs->category_Name }}</td>
                      <td>{{ $pgs->commoditties }}</td>
                      <td>{{ $pgs->office_address }}</td>
                      <td>{{ $pgs->member_no_in_pgroup }}</td>
                      <td>{{ $pgs->bank_name }}</td>
                      <td>{{ $pgs->branch_name }}</td>
                      <td>{{ $pgs->signatoryname1 }}</td>
                      <td>{{ $pgs->signatorydesignation1 }}</td>
                      <td>{{ $pgs->desg_commoditties }}</td>
                      <td>{{ $pgs->community_cader_name }}</td>
                      <td>{{ $pgs->promotedunderschemename }}</td>
                      <td>{{ $pgs->financial_month_year }}</td>
                      <td>{{ $pgs->initial_cash_in_hand }}</td>
                      <td>{{ $pgs->initial_cash_in_bank }}</td>
                      <td>{{ $pgs->initial_stock_cost }}</td>
                      <td>{{ $pgs->initial_total_amount }}</td>
                      <td>{{ $pgs->entered_mis_date }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
                <div class="pagination d-flex flex-row-reverse">
                              {{ $pg->links('vendor.pagination.bootstrap-4') }}
                                    </div> 
              </div>
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