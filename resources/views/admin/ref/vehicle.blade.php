@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Тээврийн хэрэгсэл нэмэх</h4>
          <form class="form-sample" method="POST" action="{{route('vehicle')}}">
            @csrf
            <div class="row">
              <div class="col-md-4 create-usertype row">
                  <div class="form-group">
                    <div class="form-check form-check-info">
                      <label class="form-check-label checked" name="vehicletype_choice">
                        <input type="radio" class="form-check-input checked" name="VehicleType" onclick="selection_changed('vehicletype_choice', 'checked', 0)" value="Train" checked>
                        Train
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="vehicletype_choice">
                        <input type="radio" class="form-check-input" name="VehicleType" onclick="selection_changed('vehicletype_choice', 'checked', 1)" value="Truck">
                        Truck
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="vehicletype_choice">
                        <input type="radio" class="form-check-input" name="VehicleType" onclick="selection_changed('vehicletype_choice', 'checked', 2)" value="Air-Plane">
                        Air-Plane
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="vehicletype_choice">
                        <input type="radio" class="form-check-input" name="VehicleType" onclick="selection_changed('vehicletype_choice', 'checked', 3)" value="Ship">
                        Ship
                      </label>
                    </div>
                  </div>
              </div>
              <div style="margin-left: 2%" class="col-md-7">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Тээврийн хэрэгслийн дугаар</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control create" name="VehicleNo" required/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" ></label>
                  <div class="col-sm-9">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <button class="button-submit col-md-8 btn btn-primary mr-2 save" type="submit">Хадгалах</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Тээврийн хэрэгслийн жагсаалт</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>Тээврийн хэрэгслийн дугаар</th>
                                    <th>Тээврийн хэрэгслийн төрөл</th>
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