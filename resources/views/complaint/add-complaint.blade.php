@include('component.header')
@include('component.sidebar')
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
                            <h3 class="card-title">Add Complaint</h3>
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
                        <form action="{{route('save-complaint')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
                                    fields.</h6>
                                <div class="row">

                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="namePIA">Name of Agency*</label>
                                        <input type="text" name="agency" id="agency" class="form-control" list="pia">
                                        <datalist id="pia">
                                            <option value="value"></option>
                                        </datalist>
                                    </div>

                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="district">District *</label>
                                        <input type="text" name="district" id="district" class="form-control" list="pia">
                                        <datalist id="dis">
                                            <option value="value"></option>
                                        </datalist>
                                    </div>


                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="location">Location *</label>
                                        <input type="text" placeholder="" id="location" name="location" class="form-control"
                                            list="loca">
                                        <datalist id="loca">
                                            <option value="value"></option>
                                            <option value="ack"></option>
                                            <option value="ast"></option>
                                            <option value="bie"></option>
                                            <option value="back"></option>
                                            <option value="value1"></option>
                                            <option value="ack1"></option>
                                            <option value="ast1"></option>
                                            <option value="bie1"></option>
                                            <option value="back1"></option>
                                            <option value="value2"></option>
                                            <option value="ack2"></option>
                                            <option value="ast2"></option>
                                            <option value="bie2"></option>
                                            <option value="back2"></option>
                                        </datalist>
                                    </div>

                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="mobile">Phone Number *</label>
                                        <input type="number" placeholder="Enter Phone Number" id="mobile" name="mobile"
                                            class="form-control">
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="complaint">Comlaint Details *</label>
                                        <textarea id="complaint"  name="complaint" cols="30" rows="4"
                                            class="form-control"></textarea>
                                    </div>

                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="complainee_name">Complainee Name*</label>
                                        <input type="text" placeholder="Enter Complainee Name" id="complainee_name" name="complainee_name"
                                            class="form-control">
                                    </div>

                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="complainee_mobile">Complainee Mobile Number*</label>
                                        <input type="number" placeholder="Enter Complainee Mobile Number" name="complainee_mobile" id="complainee_mobile"
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

@include('component.footer')