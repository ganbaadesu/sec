
<div class="details_div hidden" id="details_form">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">Дэлгэрэнгүй</h4>
            <form class="form-sample" method="POST" action="{{route('update')}}">
            @csrf
                <div id="ref_first">
                    <div class="row">
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Ref No</label>
                                    <input type="text" class="form-control create" name="RefNo" id="RefNo" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>B/I No</label>
                                    <input type="text" class="form-control create" name="BINo" id="BINo" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Cntr No</label>
                                    <input type="text" class="form-control create" onfocusout="check_data('containers', 'CntrNo',this.value)" name="CntrNo" id="CntrNo" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Status</label>
                                    <select class="form-control create" style="color: black" name="status" id="status" required>
                                      <option value="Pending">Pending</option>
                                      <option value="Progressing">Progressing</option>
                                      <option value="Success">Success</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Cargo name</label>
                                    <input type="text" class="form-control create" name="CargoName" id="CargoName" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Cnee name</label>
                                    <input type="text" class="form-control create" name="CneeName" id="CneeName" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Cnee phone</label>
                                    <input type="text" class="form-control create" name="CneePhone" id="CneePhone" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Port of loading</label>
                                    <input type="text" class="form-control create" name="PortOfLoading" id="PortOfLoading" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Loading date</label>
                                    <input type="date" class="form-control create" name="LoadingDate" id="LoadingDate" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>ATA VIA port</label>
                                    <input type="date" class="form-control create" name="ATA_VIA_port" id="ATA_VIA_port"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>ATD VIA port</label>
                                    <input type="date" class="form-control create" name="ATD_VIA_port" id="ATD_VIA_port"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Port</label>
                                    <input type="text" class="form-control create" name="Port" id="Port"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>VehicleNo</label>
                                    <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="VehicleNo" id="VehicleNo"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>ATA ZU</label>
                                    <input type="date" class="form-control create" name="ATA_ZU" id="ATA_ZU"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>ATD_ZU</label>
                                    <input type="date" class="form-control create" name="ATD_ZU" id="ATD_ZU"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Wagon No</label>
                                    <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ZUVehicleNo" id="ZUVehicleNo"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p style="float: right" class="btn btn-primary mr-2 ref-next-button" onclick="rel_second_page(true)">Дараагийн хуудас</p>
                            <p style="float: right" class="btn btn-primary mr-2 ref-back-button" onclick="close_details()">Хаах</p>
                        </div>
                    </div>
                </div>
                <div style="display:none" id="ref_second">
                    <div class="row">
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>ATA FD</label>
                                    <input type="date" class="form-control create" name="ATA_FD" id="ATA_FD"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Rel.Ins</label>
                                    <input type="text" class="form-control create" name="RelIns" id="RelIns"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Date Release</label>
                                    <input type="date" class="form-control create" name="DateRelease" id="DateRelease"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Inst Given Date</label>
                                    <input type="date" class="form-control create" name="InstGivenDate" id="InstGivenDate"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Shipper</label>
                                    <input type="text" class="form-control create" name="Shipper" id="Shipper"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Agent</label>
                                    <input type="text" class="form-control create" name="Agent" id="Agent" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Payment Term</label>
                                    <input type="text" class="form-control create" name="Payment" id="Payment" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>Collect Amount</label>
                                    <input type="text" class="form-control create" name="CollectAmount" id="CollectAmount"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3">
                                <div class="form-group row detail-row-column">
                                    <label>China Agent</label>
                                    <input type="text" class="form-control create" name="ChinaAgent" id="ChinaAgent" required/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Return Date</label>
                                    <input type="date" class="form-control create" name="ReturnDate" id="ReturnDate"/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Wagon No</label>
                                    <input type="text" class="form-control create" onfocusout="check_data('vehicles', 'VehicleNo', this.value)" name="ReturnVehicleNo" id="ReturnVehicleNo"/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Destination</label>
                                    <input type="text" class="form-control create" name="Destination" id="Destination"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>ATA ZU</label>
                                    <input type="date" class="form-control create" name="Return_ATA_ZU" id="Return_ATA_ZU"/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>ATD_ZU</label>
                                    <input type="date" class="form-control create" name="Return_ATD_ZU" id="Return_ATD_ZU"/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Transfer No</label>
                                    <input type="text" class="form-control create" name="TransferNo" id="TransferNo"/>
                                </div>
                            </div>
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Alarm</label>
                                    <input type="text" class="form-control create" name="Alarm" id="Alarm"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 row detail-row">
                            <div class="col-md-3" name="return_section" id="return_section">
                                <div class="form-group row detail-row-column">
                                    <label>Free Days</label>
                                    <input type="number" class="form-control create" name="FreeDays" id="FreeDays"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button style="float: right" class="btn btn-primary mr-2 ref-next-button" type="submit"">Хадгалах</button>
                            <p style="float: right" class="btn btn-primary mr-2 ref-back-button" onclick="rel_second_page(false)">Буцах</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>        
</div>