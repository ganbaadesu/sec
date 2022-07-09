@extends('layouts.admin_app')

@section('content')
<div class="row">
      <div class="card">
        <div class="card-body">
          <form class="form-sample" method="POST" action="{{route('user')}}">
            @csrf
            <div class="row">
              <div class="col-md-3 create-usertype">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check form-check-info">
                      <label class="form-check-label checked" name="usertype_choice">
                        <input type="radio" class="form-check-input checked" name="usertype" onclick="selection_changed('usertype_choice', 'checked',0)" value="admin" checked>
                        Admin
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="usertype_choice">
                        <input type="radio" class="form-check-input" name="usertype" onclick="selection_changed('usertype_choice', 'checked',1)" value="operator">
                        Operator
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="usertype_choice">
                        <input type="radio" class="form-check-input" name="usertype" onclick="selection_changed('usertype_choice', 'checked',2)" value="account">
                        Account
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="usertype_choice">
                        <input type="radio" class="form-check-input" name="usertype" onclick="selection_changed('usertype_choice', 'checked',3)" value="cnee">
                        Cnee
                      </label>
                    </div>
                    <div class="form-check form-check-info">
                      <label class="form-check-label" name="usertype_choice">
                        <input type="radio" class="form-check-input" name="usertype" onclick="selection_changed('usertype_choice', 'checked',4)" value="shipper">
                        Shipper
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-9 row create-user">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control create" name="name" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control create" name="email" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Phone</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control create" name="phone" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-md-12">
                      <button class="button-submit col-md-8 btn btn-primary mr-2 save" type="submit">SAVE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection