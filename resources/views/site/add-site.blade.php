@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default mt-4"
                        style="border-top: 4px solid #0c1476; border-bottom: 4px solid #0c1476;">
                        <div class="card-header" style="background-color: #F7F7F7;">
                            <h3 class="card-title">Add Site</h3>
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
                        <form action="{{route('save-site')}}"  method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
                                    fields.</h6>
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label for="SiteName">Site Name *</label>
                                        <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="SiteEmail">Site Email *</label>
                                        <input type="email" placeholder="Enter email id"  id="email" name="email"
                                            class="form-control" required >
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="phone">Site Mobile Number *</label>
                                        <input type="tel" placeholder="Enter Phone Number" id="mobile" name="mobile"
                                            class="form-control" required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="district">District *</label>
                                        <select class="form-control" id="district" name="district">
                                            <option value="" selected disabled>Select...</option>
                                            <option>xyz1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="block">Block *</label>
                                        <select class="form-control" id="block" name="block">
                                            <option value="" selected disabled>Select...</option>
                                            <option>xyz1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="village">Village *</label>
                                        <select class="form-control" id="village" name="village">
                                            <option value="" selected disabled>Select...</option>
                                            <option>xyz1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="lattitude">Lattitude</label>
                                        <input type="text" placeholder=""  id="lattitude" name="lattitude"
                                            class="form-control" required>
                                    </div>

                                    

                                    <div class="col-md-6 form-group">
                                        <label for="longnitude">Longnitude</label>
                                        <input type="text" placeholder=""  id="longitude" name="longitude"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-default float-right">Cancel</button>
                            </div>

                        </form>
                    </div>
            </section>
            <!-- /.content -->
        </div>
<!-- / Content -->
<!-- Footer -->
@include("component.footer");
