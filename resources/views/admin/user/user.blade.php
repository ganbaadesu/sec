@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Хэрэглэгч бүртгэх</h4>
          <form class="form-sample" method="POST" action="{{route('user')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Usertype</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="usertype" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" >Phone</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" required/>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <button  class="btn btn-primary mr-2 button-submit" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection