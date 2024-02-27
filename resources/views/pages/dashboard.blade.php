@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper"
      style="height: max-content !important; max-height: max-content !important; min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px)) !important;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-bold">Dashboard </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="row">
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="icon">
                      <i class="fa fa-envelope" style="color: #2b4d74 !important;"></i>
                    </div>
                    <div class="inner">
                      <h3>150</h3>
                      <p>Total Complaints</p>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #2b4d74 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>
                        53<sup style="font-size: 20px">%</sup>
                      </h3>
                      <p>Complaints Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check" style="color: #023E88 !important;"></i>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #023E88 !important; color: white !important; ">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>44</h3>
                      <p>Monthly Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-envelope-open " style="color: #1E90FF  !important;"></i>
                    </div>
                    <a href="#" class="small-box-footer"
                      style="background-color: #1E90FF !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Monthly  Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check-circle" style="color: #013A63 !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer "
                      style="background-color: #013A63 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Today's Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-envelope-square" style="color: #000080 !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer"
                      style="background-color:#000080 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3>65</h3>
                      <p>Today's  Resolved</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-check-square" style="color: #0019fd !important;"></i>
                    </div>

                    <a href="#" class="small-box-footer "
                      style="background-color: #0019fd !important;color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 col-12">
              <div class="card p-2" id="pie">
                <h5 class="pl-3 pt-2">State Wise Complaints Donut Graph</h5>
                <div id="chart2"></div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-6">
              <div class="card p-2" id="bar">
                <h5 class="pl-3 pt-2">State Wise Bar Complaints</h5>
                <div id="chart"></div>
              </div>
            </div>

            <div class="col-lg-6 col-6">
              <div class="card " style='height: 500px'>
                <div class=" card-header " style="background-color: #002951; color: white;">
                  <h5>State Wise Complaints</h5>
                </div>
                <div class=" card-body dataTab" style=" overflow-y: auto">
                  <table class=" table table-bordered table-hover">
                    <thead class="" style="background-color: #4098f1; color: white;">
                      <tr>
                        <th>State</th>
                        <th>Number of Complaint</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>
                      <tr>
                        <td>Bihar</td>
                        <td>200</td>
                      </tr>


                    </tbody>
                    <tfoot>
                      <tr>
                        <th>State</th>
                        <th>Total number of Complaint</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>

          </div>


        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
<!-- / Content -->

<!-- Footer -->
@include('component.footer')