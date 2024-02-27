@include('component.table-header')
@include('component.sidebar')
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
                                District Complaints
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1"
                                class="table table-bordered table-striped d-block d-md-table"
                                style="overflow-x: scroll;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Reference</th>
                                        <th>Warehouse(From)</th>
                                        <th>Warehouse(To)</th>
                                        <th>Product Cost</th>
                                        <th>Product Tax</th>
                                        <th>Grand Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06-12-23</td>
                                        <td>ets-21354655465335</td>
                                        <td>Warehouse 1</td>
                                        <td>Warehouse 2</td>
                                        <td>1600.00</td>
                                        <td>0.00</td>
                                        <td>1600.00</td>
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
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="7">Total</th>
                                        <th colspan="2">0.00</th>
                                    </tr>
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