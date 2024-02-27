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
                                    Breda Complaints
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
                                            <th>Complain ID</th>
                                            <th>Agency</th>
                                            <th>District</th>
                                            <th>Location</th>
                                            <th>Mobile NO</th>
                                            <th>Complaint</th>
                                            <th>Complainee Name</th>
                                            <th>Complainee Mobile</th>
                                            <th>Created By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1?>
                                        @foreach($data as $Complaint)

                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$Complaint->complaint_id}}</td>
                                            <td>{{$Complaint->agency}}</td>
                                            <td>{{$Complaint->district}}</td>
                                            <td>{{$Complaint->location}}</td>
                                            <td>{{$Complaint->mobile}}</td>
                                            <td>{{$Complaint->complaint}}</td>
                                            <td>{{$Complaint->complainee_name}}</td>
                                            <td>{{$Complaint->complainee_mobile}}</td>
                                            <td style="cursor:pointer;" onclick="openMode1()"><span
                                                class="badge badge-success p-2">Completed</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-info">Action</button>
                                                <button type="button"
                                                    class="btn btn-info dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <a class="dropdown-item" href="#"
                                                        onclick="openMode1()"><span><i
                                                                class="fa fa-eye"></i></span>&emsp;View</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"
                                                        href="./update-transfer.html"><i
                                                            class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><span><i
                                                                class="fa fa-trash"></i></span>&emsp;Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination d-flex flex-row-reverse">
                                </div>
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