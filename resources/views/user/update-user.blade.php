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
                            <h3 class="card-title">Update User</h3>
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
                        <form action="{{route('update-user')}}"  method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
                                    fields.</h6>
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label for="userName">User Name *</label>
                                        <input type="hidden" name="uid" value="{{$user->id}}">
                                        <input type="text" placeholder="Enter Name" id="userName" name="name" class="form-control" value="{{$user->name}}">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="userEmail">User Email *</label>
                                        <input type="email" placeholder="Enter email id"  id="userName" name="email"value="{{$user->email}}"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="phone">User Mobile Number *</label>
                                        <input type="tel" placeholder="Enter Phone Number" id="userPhone" name="mobile"value="{{$user->mobile}}"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="district">District *</label>
                                        <select class="form-control" id="district" name="district" value="{{$user->district}}">
                                            <option value="" selected disabled>Select...</option>
                                            <option value="xyz1" {{ $user->district == 'xyz1' ? 'selected' : '' }}>xyz1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="role">Role *</label>
                                        <select class="form-control" id="role" name="role" value="{{$user->role}}" >
                                            <option value="" selected disabled>Select...</option>
                                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="Team" {{ $user->role == 'Team' ? 'selected' : '' }}>Team</option>
                                            <option value="Guest" {{ $user->role == 'Guest' ? 'selected' : '' }}>Guest</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="designation">Designation</label>
                                        <select class="form-control" id="designation" name="designation" value="{{$user->designation}}">
                                            <option value="">Select..</option>
                                            <option value="Others" {{ $user->designation == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="pass">Password *</label>
                                        <input type="password" placeholder="Enter Password" id="pass" name="password" 
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="confirmPass">Confirm Password *</label>
                                        <input type="password" placeholder="Enter Password" id="confirmPass" name="confirmpassword"
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
