@include('component.table-header')
@include('component.sidebar')
<style>
  @media (max-width: 375px) {
    #example1 {
      display: block;
    }
  }

  .ig-0 {
    color: #70ad47 !important;
  }

  .ig-1 {
    color: #0563c1 !important;
  }

  .ig-2 {
    color: #ed7d31 !important;
  }

  .ig-3 {
    color: #5b9bd5 !important;
  }

  .ig-4 {
    color: #ffc000 !important;
  }
</style>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper card" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{$clickedState}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="dashboard">Dashboard</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <!-- Info boxes -->
      <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box" style="background-color:  rgb(102, 228, 38);">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-edit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total District</span>
                <span class="info-box-number">
                  10
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3" style="background-color:  rgb(142, 112, 231);">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{route('view-PG')}} " style="color:black">PG</a></span>
              <span class="info-box-number"> {{$total_pg}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
 
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3" style="background-color: rgba(138, 200, 87, 0.899);">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-image"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="{{route('view-PE')}}" style="color:black">PE</a></span>
              <span class="info-box-number">{{$total_pe}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3" style="background-color: rgb(234, 172, 172);">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="{{route('view-FPO')}}" style="color:black">FPO</a></span>
              <span class="info-box-number">{{$total_fpo}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
          <div class="col-12">

            <div class="card mt-2" >
              <div class="card-header" style="background-color: rgb(6, 2, 131);color: white;">
                <h3 class="card-title">Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="overflow-x: auto;">
                  <thead>
                  <tr>
                    <th>District</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>FPO</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Vaishali</td>
                    <td>2000</td>
                    <td>2010</td>
                    <td>101</td>
                    <!-- <td>
                      <div class="action">
                        <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                      </div>
                    </td> -->
                  </tr>
                  <tr>
                    <td>Muzaffarpur</td>
                    <td>2090</td>
                    <td>2010</td>
                    <td>202</td>
                    <!-- <td>
                      <div class="action">
                        <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                      </div>
                    </td> -->
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>District</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>FPO</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </tfoot>
                </table>
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
<!-- /.content-wrapper -->
@include("component.table-footer");