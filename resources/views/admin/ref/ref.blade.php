@extends('layouts.admin_app')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center">Бараа нэмэх</h4>
            <form class="form-sample" method="POST" action="{{route('ref')}}">
              @csrf
              <div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label" >Ref Type</label>
                      <div class="col-sm-10">
                        <select class="form-control create" style="color: black" name="RefType" required>
                          <option>Generation</option>
                          <option>Japan</option>
                          <option>Korean</option>
                          <option>Export</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="ref_first">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Ref No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="RefID" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >B/I No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="BINo" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Cntr No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" onfocusout="check_data('containers', 'CntrNo',this.value)" name="CntrNo" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Cargo name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="CargoName" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Cnee name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="CneeName" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Cnee phone</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="CneePhone" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Port of loading</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="PortOfLoading" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Loading date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="LoadingDate" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATA VIA port</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ATA_VIA_port"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATD VIA port</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ATD_VIA_port"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Port</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Port"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >VehicleNo</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="VehicleNo"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATA ZU</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ATA_ZU"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATD_ZU</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ATD_ZU"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Wagon No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ZUVehicleNo"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATA FD</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ATA_FD"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Rel.Ins</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="RelIns"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Date Release</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="DateRelease"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p style="float: right" class="btn btn-primary mr-2 save" onclick="rel_second_page(true)">Дараагийн хуудас</p>
                  </div>
                </div>
              </div>
              <div style="display:none" id="ref_second">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Inst Given Date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="InstGivenDate"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Shipper</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Shipper"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Agent</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Agent" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Payment Term</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Payment" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Collect Amount</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="CollectAmount"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >China Agent</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="ChinaAgent" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Return Date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="ReturnDate"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Wagon No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ReturnVehicleNo"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Destination</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Destination"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATA ZU</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="Return_ATA_ZU"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >ATD_ZU</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control create" name="Return_ATD_ZU"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Transfer No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="TransferNo"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Alarm</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control create" name="Alarm"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" >Free Days</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control create" name="FreeDays" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <p style="float: left" class="btn btn-primary mr-2 save" onclick="rel_second_page(false)">Буцах</p>
                  </div>
                  <div class="col-md-6">
                    <button style="float: right" class="btn btn-primary mr-2 save" type="submit"">Хадгалах</button>
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