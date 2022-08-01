@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
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
              <div class="col-md-3">
                <div class="col-md-12 reftype-title">
                    <h5>Хариуцсан хэсэг</h5>
                </div>
                <div style="padding: 2px 2px" class="col-md-12 create-usertype">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="form-check form-check-info">
                        <label class="form-check-label checked" name="reftype_choice">
                          <input type="radio" class="form-check-input checked" name="reftype" onclick="selection_changed('reftype_choice', 'checked',0)" value="generation" checked>
                          Generation
                        </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label" name="reftype_choice">
                          <input type="radio" class="form-check-input" name="reftype" onclick="selection_changed('reftype_choice', 'checked',1)" value="japan">
                          Japan
                        </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label" name="reftype_choice">
                          <input type="radio" class="form-check-input" name="reftype" onclick="selection_changed('reftype_choice', 'checked',2)" value="korean">
                          Korean
                        </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label" name="reftype_choice">
                          <input type="radio" class="form-check-input" name="reftype" onclick="selection_changed('reftype_choice', 'checked',3)" value="export">
                          Export
                        </label>
                      </div>
                    </div>
                  </div>
              </div>

              </div>
              <div class="col-md-6 row create-user">
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
</div>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Хэрэглэгчдийн жагсаалт</h4>
              <div class="table-responsive">
                  <table class="table table-hover table-striped table-bordered">
                      <thead>
                          <tr class="table-header">
                              <th>
                                Нэр
                              </th>
                              <th>
                                Е-майл
                              </th>
                              <th>
                                Хэрэглэгчийн төрөл
                              </th>
                              <th>
                                Утас
                              </th>
                              <th>
                                Хариуцсан хэсэг
                              </th>
                              <th>
                                Нүүр зураг
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                              <tr>
                                  <td>
                                    {{$user["name"]}}
                                  </td>
                                  <td>
                                    {{$user["email"]}}
                                  </td>
                                  <td>
                                    {{$user["usertype"]}}
                                  </td>
                                  <td>
                                    {{$user["phone"]}}
                                  </td>
                                  <td>
                                    {{$user["reftype"]}}
                                  </td>
                                  <td>
                                  <img class="profile-pic" src="{{asset($user["profile"])}}" alt="profile"/>
                                  </td>
                              </tr>
                            @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

</div>
@endsection