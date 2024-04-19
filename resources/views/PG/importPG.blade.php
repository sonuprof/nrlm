@include('component.header')
@include('component.sidebar')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default mt-4">
                <div class="card-header newHead">
                    <h3 class="card-title text-bold">Import PG</h3>
                </div>
                @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                    {{session('status')}}
                    </div>
                    @endif
                <form action="{{route('PGimport')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Choose File</h6>
                        <div class="row">
                            <input type="file" name="pg_excel" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer" style="background-color: azure;">
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