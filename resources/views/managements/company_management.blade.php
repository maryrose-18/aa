@extends('template.app') {{-- kung saang file mo siya lalagay --}}

@section('content'){{-- kung saan mo siya lalagay  sa app template--}}
<div class="container-fluid pt-2 pl-4">
    <div class="row">
        <div class="col-sm-4 input-fields p-2">
            <select class="form-control mb-4" id="inputGroupSelect03">
                <option selected>Choose section...</option>
                <option value="assembly">Assembly</option>
                <option value="pc-warehouse">PC/Warehouse</option>
                <option value="pe-parts">Production Engineering(Parts)</option>
                <option value="pe-units">Production Engineering(Units)</option>
                <option value="qc-inspection">QC-Inspection</option>
                <option value="qa">Quality Assurance</option>
                <option value="purchasing">Purchasing</option>
                <option value="hr">Human Resource</option>
                <option value="is">Information System</option>
                <option value="press">Press</option>
            </select>

            <label>Local Head</label>
            <input type="text" class="form-control mb-4" placeholder="Local Head">

            <label>Japanese Head</label>
            <input type="text" class="form-control mb-4" placeholder="Japanese Head">

            <label>Status</label>
            <select class="form-control mb-4" id="slc_status">
                <option selected>Choose status...</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            
            <div class="controls">
                <button type="button" class="btn btn-primary" onclick="COMPANY.save_data();" >SAVE</button>
                <button type="button" class="btn btn-danger">CANCEL</button>
            </div>
            {{-- <form action="{{route('company.management')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">TEST</button>
            </form>  USED  as sample if using token in a form --}}
        </div>
        <div class="col-sm-8">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Section</th>
                        <th scope="col">Local Head</th>
                        <th scope="col">Japanese Head</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                        <td>1</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                        <td>1</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                        <td>1</td>
                        <td>dsf</td>
                        <td>dsfsdvc</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('custom_js')
<script src="{{asset('scripts/company_management.js')}}"></script>
@endsection
