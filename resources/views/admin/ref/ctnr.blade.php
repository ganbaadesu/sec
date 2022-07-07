@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Container</h4>
          <form class="form-sample" method="POST" action="{{route('user')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr No</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="CntrNo" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr Size</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="CntrSize" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="CntrType" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Cntr Owner</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="CntrOwner" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-primary mr-2 button-submit" type="submit">Submit</button>
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
                <p class="card-title">Container list</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>REF No</th>
                                    <th>B/l No</th>
                                    <th>Cntr No</th>
                                    <th>Cargo Name</th>
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