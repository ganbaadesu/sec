@extends('layouts.admin_app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="ref-title">
      <p>Бараа үүсгэх </p>
    </div>
  </div>
</div>
  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form class="form-sample" method="POST" action="{{route('ref')}}">
              @csrf
              <div id="ref_first">
                <div class="row">
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Ref Type</label>
                        <select class="form-control create" style="color: black" name="RefType" required>
                          <option>Generation</option>
                          <option>Japan</option>
                          <option>Korean</option>
                          <option>Export</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Ref No</label>
                        <input type="text" class="form-control create" name="RefNo" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>B/I No</label>
                        <input type="text" class="form-control create" name="BINo" required/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Cntr No</label>
                        <input type="text" class="form-control create" onfocusout="check_data('containers', 'CntrNo',this.value)" name="CntrNo" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Cargo name</label>
                        <input type="text" class="form-control create" name="CargoName" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Cnee name</label>
                        <input type="text" class="form-control create" name="CneeName" required/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Cnee phone</label>
                        <input type="text" class="form-control create" name="CneePhone" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Port of loading</label>
                        <input type="text" class="form-control create" name="PortOfLoading" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Loading date</label>
                        <input type="date" class="form-control create" name="LoadingDate" required/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>ATA VIA port</label>
                        <input type="date" class="form-control create" name="ATA_VIA_port"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>ATD VIA port</label>
                        <input type="date" class="form-control create" name="ATD_VIA_port"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Port</label>
                        <input type="text" class="form-control create" name="Port"/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>VehicleNo</label>
                        <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="VehicleNo"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>ATA ZU</label>
                        <input type="date" class="form-control create" name="ATA_ZU"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>ATD_ZU</label>
                        <input type="date" class="form-control create" name="ATD_ZU"/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Wagon No</label>
                        <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ZUVehicleNo"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>ATA FD</label>
                        <input type="date" class="form-control create" name="ATA_FD"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Rel.Ins</label>
                        <input type="text" class="form-control create" name="RelIns"/>
                      
                    </div>
                  </div>
                </div>
                  <div class="col-md-12">
                    <p style="float: right" class="btn btn-primary mr-2 ref-next-button" onclick="rel_second_page(true)">Дараагийн хуудас</p>
                  </div>
                </div>
              </div>
              <div style="display:none" id="ref_second">
                <div class="row">
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Date Release</label>
                        <input type="date" class="form-control create" name="DateRelease"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Inst Given Date</label>
                        <input type="date" class="form-control create" name="InstGivenDate"/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Shipper</label>
                        <input type="text" class="form-control create" name="Shipper"/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Agent</label>
                        <input type="text" class="form-control create" name="Agent" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Payment Term</label>
                        <input type="text" class="form-control create" name="Payment" required/>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>Collect Amount</label>
                        <input type="text" class="form-control create" name="CollectAmount"/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 row detail-row">
                  <div class="col-md-4">
                    <div class="form-group row detail-row-column">
                      <label>China Agent</label>
                        <input type="text" class="form-control create" name="ChinaAgent" required/>
                      
                    </div>
                  </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Return Date</label>
                          <input type="date" class="form-control create" name="ReturnDate"/>
                        
                      </div>
                    </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Wagon No</label>
                          <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ReturnVehicleNo"/>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 row detail-row">
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Destination</label>
                          <input type="text" class="form-control create" name="Destination"/>
                        
                      </div>
                    </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>ATA ZU</label>
                          <input type="date" class="form-control create" name="Return_ATA_ZU"/>
                        
                      </div>
                    </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>ATD_ZU</label>
                          <input type="date" class="form-control create" name="Return_ATD_ZU"/>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 row detail-row">
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Transfer No</label>
                          <input type="text" class="form-control create" name="TransferNo"/>
                        
                      </div>
                    </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Alarm</label>
                          <input type="text" class="form-control create" name="Alarm"/>
                        
                      </div>
                    </div>
                    <div class="col-md-4" name="return_section">
                      <div class="form-group row detail-row-column">
                        <label>Free Days</label>
                          <input type="number" class="form-control create" name="FreeDays"/>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button style="float: right" class="btn btn-primary mr-2 ref-next-button" type="submit"">Хадгалах</button>
                    <p style="float: right" class="btn btn-primary mr-2 ref-back-button" onclick="rel_second_page(false)">Буцах</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection