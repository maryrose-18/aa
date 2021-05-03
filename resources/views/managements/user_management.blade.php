@extends('template.app') {{-- kung saang file mo siya lalagay --}}

@section('content'){{-- kung saan mo siya lalagay  sa app template--}}
<div class="container-fluid pt-2 pl-4">
    <div class="row">
        <div class="col-sm-4 input-fields p-2">
            <div class="row">
                <div class="col-sm-4">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col-sm-4">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middle Name">
                </div>
                <div class="col-sm-4">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-4">
                        <label>Gender</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
        </div>
        <div class="col-sm-8">

        </div>
    </div>
</div>
@endsection

@section('custom_js')
    
@endsection