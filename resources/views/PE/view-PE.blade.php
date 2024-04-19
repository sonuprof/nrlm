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
                  PE Details
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
                      <th>Promoting Agency</th>
                      <th>Name of FPO</th>
                      <th>District</th>
                      <th>Date of Registration</th>
                      <th>Commodity</th>
                      <th>Number of Members</th>
                      <th>Sales Revenue 2017-18 (lakh Rupees)</th>
                      <th>Sales Revenue 2018-19 (lakh Rupees)</th>
                      <th>Sales Revenue 2019-20 (lakh Rupees)</th>
                      <th>Sales Revenue 2020-21 (lakh Rupees)</th>
                      <th>Sales Revenue 2021-22 (lakh Rupees)</th>
                      <th>Sales Revenue 2022-23 (lakh Rupees)</th>
                      <th>Member's Target FY 2023-24</th>
                      <th>Sales Revenue Target FY 2023-24 (In ₹ Lakhs)</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1 ?>


                    @foreach($pe as $pes)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td><a href="{{route('PE-state', ['state' => $pes->state]) }}" >{{$pes->state }}</a></td>
                      <td>{{ $pes->promoting_agency }}</td>
                      <td>{{ $pes->fpo }}</td>
                      <td>{{$pes->district }}</td>
                      <td>{{ $pes->regs_date }}</td>
                      <td>{{ $pes->commodity }}</td>
                      <td>{{ $pes->members }}</td>
                      <td>{{ $pes->Sales_Revenue_2017_18 }}</td>
                      <td>{{ $pes->Sales_Revenue_2018_19 }}</td>
                      <td>{{ $pes->Sales_Revenue_2019_20 }}</td>
                      <td>{{ $pes->Sales_Revenue_2020_21 }}</td>
                      <td>{{ $pes->Sales_Revenue_2021_22 }}</td>
                      <td>{{ $pes->Sales_Revenue_2022_23 }}</td>
                      <td>{{ $pes->Mem_target_fy_2023_24 }}</td>
                      <td>{{ $pes->Sales_Revenue_2023_24 }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              
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