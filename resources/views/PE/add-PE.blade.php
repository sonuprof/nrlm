@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default mt-4">
                        <div class="card-header newHead">
                            <h3 class="card-title text-bold">Add PE</h3>
                        </div>
                        
                        <form action="{{route('PEimport')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">The field labels marked with * are required input fields.</h6>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="state">State *</label>
                                        <input type="text" name="state" id="state" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="promoting_agency">Promoting Agency *</label>
                                        <input type="text" name="promoting_agency" id="promoting_agency" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="fpo_name">Name of FPO *</label>
                                        <input type="text" name="fpo"  class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="district">District *</label>
                                        <input type="text" name="district" id="district" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="registration_date">Date of Registration *</label>
                                        <input type="date" name="regs_date"class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="commodity">Commodity *</label>
                                        <input type="text" name="commodity" id="commodity" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="num_members">Number of Members *</label>
                                        <input type="number" name="members" id="members" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2017_18">Sales Revenue 2017-18 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2017_18" id="sales_revenue_2017_18" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2018_19">Sales Revenue 2018-19 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2018_19" id="sales_revenue_2018_19" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2019_20">Sales Revenue 2019-20 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2019_20" id="sales_revenue_2019_20" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2020_21">Sales Revenue 2020-21 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2020_21" id="sales_revenue_2020_21" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2021_22">Sales Revenue 2021-22 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2021_22" id="sales_revenue_2021_22" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_2022_23">Sales Revenue 2022-23 (lakh Rupees) *</label>
                                        <input type="number" name="sales_revenue_2022_23" id="sales_revenue_2022_23" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="members_target_2023_24">Member's Target FY 2023-24 *</label>
                                        <input type="number" name="mem_target_fy_2023_24" id="members_target_2023_24" class="form-control">
                                    </div>
            
                                    <div class="col-lg-6 col-md-12 form-group">
                                        <label for="sales_target_2023_24">Sales Revenue Target FY 2023-24 (In ₹ Lakhs) *</label>
                                        <input type="number" name="sales_revenue_2023_24" id="sales_revenue_2023_24" class="form-control">
                                    </div>
            
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: azure;" >
                                <button type="submit" class="btn     text-bold mr-3" style="background-color: blue; color: white;">Submit</button>
                                <button type="reset" class="btn     text-bold" style="background-color: white;border: 2px solid blue;color: blue;">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            
           
 
        </div>
<!-- / Content -->
<!-- Footer -->
@include("component.footer");