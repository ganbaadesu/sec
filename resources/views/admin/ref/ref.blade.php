@extends('layouts.admin_app')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add order</h4>
            <form class="form-sample" method="POST" action="{{route('ref')}}">
              @csrf
              <div style="display: inline-block" id="ref_first">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Ref No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Ref_ID" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >B/L No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="BL_No" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cntr No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Cntr_No" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cntr size</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CntrSize" disabled/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cntr type</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CntrType" disabled/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cntr owner</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CntrOwner" disabled/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cargo name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Cargo_Name" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cnee name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Cnee_Name" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Cnee phone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Cnee_Phone" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Port of loading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Port_Of_Loading" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Loading date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="Loading_date" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >ATA VIA port</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="ATA_VIA_port" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >ATD VIA port</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="ATD_VIA_port" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Type of departure</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Type_of_departure" disabled/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Vehicle No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Vehicle_No" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >ATA ZU</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="ATA_ZU" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >ATD_ZU</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="ATD_ZU" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Wagon No</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="ZU_Vehicle_No" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >ATA FD</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="Ref_ID" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Rel.Ins</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Rel_Ins" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p style="float: right" class="btn btn-primary mr-2" onclick="rel_second_page(true)">Next</p>
                  </div>
                </div>
              </div>
              <div style="display:none" id="ref_second">
                <div class="row">
                  <div class="col-md-6">
                    <p style="float: right" class="btn btn-primary mr-2" onclick="rel_second_page(false)">Back</p>
                  </div>
                  <div class="col-md-6">
                    <button style="float: right" class="btn btn-primary mr-2" type="submit"">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection