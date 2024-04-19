@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default mt-4">
                        <div class="card-header newHead">
                            <h3 class="card-title text-bold">Add PG</h3>
                        </div>
                    
                        <form action="{{route('save-PG')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">The field labels marked with * required input fields.</h6>
                                <div class="row">
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="state_name">State Name *</label>
                                        <input type="text" name="state" id="state" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="district_name">District Name *</label>
                                        <input type="text" name="district" id="district" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="block_name">Block Name *</label>
                                        <input type="text" name="block" id="block" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="village_name">Village Name *</label>
                                        <input type="text" name="village" id="village" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="int_producer_id">Producer ID *</label>
                                        <input type="text" name="int_producer_id" id="int_producer_id" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="pgroupname">Producer Group Name *</label>
                                        <input type="text" name="pgroupname" id="pgroupname" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="date_of_formation">Date of Formation *</label>
                                        <input type="date" name="date_of_formation" id="date_of_formation" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="category_name">Category Name *</label>
                                        <input type="text" name="category_name" id="category_name" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="commodities">Commodities *</label>
                                        <input type="text" name="commoditties" id="commoditties" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="office_address">Office Address *</label>
                                        <input type="text" name="office_address" id="office_address" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="member_no_in_pgroup">Member Number in Producer Group *</label>
                                        <input type="text" name="member_no_in_pgroup" id="member_no_in_pgroup" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="bank_name">Bank Name *</label>
                                        <input type="text" name="bank_name" id="bank_name" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="branch_name">Branch Name *</label>
                                        <input type="text" name="branch_name" id="branch_name" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="signatoryname1">Signatory Name *</label>
                                        <input type="text" name="signatoryname1" id="signatoryname1" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="signatorydesignation1">Signatory Designation *</label>
                                        <input type="text" name="signatorydesignation1" id="signatorydesignation1" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="commodities">Commodities *</label>
                                        <input type="text" name="desg_commoditties" id="commodities" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="community_cader_name">Community Cader Name *</label>
                                        <input type="text" name="community_cader_name" id="community_cader_name" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="promotedunderschemename">Promoted Under Scheme Name *</label>
                                        <input type="text" name="promotedunderschemename" id="promotedunderschemename" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="financial_month_year">Financial Month Year *</label>
                                        <input type="month" name="financial_month_year" id="financial_month_year" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="initial_cash_in_hand">Initial Cash in Hand *</label>
                                        <input type="text" name="initial_cash_in_hand" id="initial_cash_in_hand" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="initial_cash_in_bank">Initial Cash in Bank *</label>
                                        <input type="text" name="initial_cash_in_bank" id="initial_cash_in_bank" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="initial_stock_cost">Initial Stock Cost *</label>
                                        <input type="text" name="initial_stock_cost" id="initial_stock_cost" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="initial_total_amount">Initial Total Amount *</label>
                                        <input type="text" name="initial_total_amount" id="initial_total_amount" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="entered_mis_date">Entered MIS Date *</label>
                                        <input type="date" name="entered_mis_date" id="entered_mis_date" class="form-control">
                                    </div>
                                            </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer" style="background-color: azure;" >
                                <button type="submit" class="btn     text-bold mr-3" style="background-color: blue; color: white;">Submit</button>
                                <button type="reset" class="btn     text-bold" style="background-color: white;border: 2px solid blue;color: blue;">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            
            <!-- /.content -->
        </div>
<!-- / Content -->
<!-- Footer -->
@include("component.footer");