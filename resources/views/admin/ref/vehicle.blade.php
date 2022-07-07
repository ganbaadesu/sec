@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Vehicle</h4>
          <form class="form-sample" method="POST" action="{{route('vehicle')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Vehicle No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="VehicleNo" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Vehicle type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="VehicleType" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <button style="float: right" class="btn btn-primary mr-2" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Vehicle list</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>Vehicle No</th>
                                    <th>Vehicle Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <td>{{$vehicle["VehicleNo"]}}</td>
                                            <td>{{$vehicle["VehicleType"]}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection