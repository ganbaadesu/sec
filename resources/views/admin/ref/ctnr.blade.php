@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Контайнар нэмэх</h4>
          <form class="form-sample" method="POST" action="{{route('cntr')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control create" name="CntrNo" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr Size</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control create" name="CntrSize" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr Type</label>
                  <div class="col-sm-9">
                    <select class="form-control create" onchange="cntrChange(this.value)" style="color: black" name="CntrType" required>
                      <option>COC</option>
                      <option>SOC</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Cntr Owner</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control create" name="CntrOwner" id="CntrOwner"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" ></label>
                  <div class="col-sm-9">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <button class="col-md-12 btn btn-primary mr-2 button-submit save" type="submit">Хадгалах</button>
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
                <p class="card-title">Контайнарын жагсаалт</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>Cntr No</th>
                                    <th>Cntr Size</th>
                                    <th>Cntr Type</th>
                                    <th>Cntr Owner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($containers as $container)
                                        <tr>
                                            <td>{{$container["CntrNo"]}}</td>
                                            <td>{{$container["CntrSize"]}}</td>
                                            <td>{{$container["CntrType"]}}</td>
                                            <td>{{$container["CntrOwner"]}}</td>
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