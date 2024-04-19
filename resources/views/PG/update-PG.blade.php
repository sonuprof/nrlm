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
                            <h3 class="card-title">Update Site</h3>
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
                        <form action="{{route('update-site')}}"  method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
                                    fields.</h6>
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label for="SiteName">Site Name *</label>
                                        <input type="hidden" name="uid"  value="{{$site->id}}">
                                        <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control" value="{{$site->name}}">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="email">Site Email *</label>
                                        <input type="email" placeholder="Enter email id"  id="email" name="email" value="{{$site->email}}"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="phone">Site Mobile Number *</label>
                                        <input type="number" placeholder="Enter Phone Number" id="mobile" name="mobile" value="{{$site->mobile}}"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="district">District *</label>
                                        <select class="form-control" id="district" name="district" >
                                            <option value="" selected disabled>Select...</option>
                                            <option value="xyz1" {{$site->district == 'xyz1' ? 'selected' : '' }}>xyz1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="block">Block *</label>
                                        <select class="form-control" id="block" name="block">
                                            <option value="" selected disabled>Select...</option>
                                            <option value="xyz1" {{ $site->block == 'xyz1' ? 'selected' : '' }}>xyz1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="village">Village *</label>
                                        <select class="form-control" id="village" name="village">
                                            <option value="" selected disabled>Select...</option>
                                            <option value="xyz1" {{ $site->village == 'xyz1' ? 'selected' : '' }}>xyz1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="lattitude">Lattitude</label>
                                        <input type="text" placeholder=""  id="lattitude" name="lattitude" value="{{$site->lattitude}}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="longnitude">Longnitude</label>
                                        <input type="text" placeholder=""  id="longitude" name="longitude" value="{{$site->longitude}}"
                                            class="form-control">
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
