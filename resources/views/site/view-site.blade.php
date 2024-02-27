@include('component.table-header')
@include('component.sidebar')

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">


  <section class="content-header">
    <div class="container-fluid bg-white rounded p-0 mt-0">
      <!-- <hr class="p-0"> -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-4">
          <div class="card">
            <!-- /.card-header -->
            <div class="card shadow-none">
              <div class="card-header">
                <h3 class="card-title">
                  Breda sites
                </h3>
              </div>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @if(session()->has('status'))
              <div class="alert my-3 p-3 alert-success">
                {{session('status')}}
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x: auto; ">
                  <thead>
                    <tr>
                      <th>Sr NO</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>District</th>
                      <th>Block</th>
                      <th>Village</th>
                      <th>Lattitude</th>
                      <th>Longitude</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i = 1 ?>
                   

                      @foreach($site as $sites)

                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{$sites->name}}</td>
                      <td>{{$sites->email}}</td>
                      <td>{{$sites->mobile}}</td>
                      <td>{{$sites->district}}</td>
                      <td>{{$sites->block}}</td>
                      <td>{{$sites->village}}</td>
                      <td>{{$sites->lattitude}}</td>
                      <td>{{$sites->longitude}}</td>

                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('edit',['id'=>$sites->id])}}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('delete', ['id' => $sites->id]) }}" onclick="return confirm('Are you sure you want to delete?')">
                              <span><i class="fa fa-trash"></i></span>&emsp;Delete
                            </a>

                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

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