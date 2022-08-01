@extends('layouts.admin_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <nav class="content-menu">
                <div class="col-9 row">
                    <ul class="nav">
                        <div class="col-3">
                            <li class="nav-item active" name="permission_usertype">
                                <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 0), check_permissions({{$permissions['operator']}})" id="permission_menu_operator">Operator</p>
                            </li>
                        </div>
                        <div class="col-3">
                            <li class="nav-item" name="permission_usertype">
                                <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 1), check_permissions({{$permissions['account']}})">Account</p>
                            </li>
                        </div>
                        <div class="col-3">
                            <li class="nav-item" name="permission_usertype">
                                <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 2), check_permissions({{$permissions['cnee']}})">Cnee</p>
                            </li>
                        </div>
                        <div class="col-3">
                            <li class="nav-item" name="permission_usertype">
                                <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 3), check_permissions({{$permissions['shipper']}})">Shipper</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample" method="POST" action="{{route('permission')}}">
                        @csrf
                        <div class="row permission">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="RefNo" id="RefNo">
                                            Ref No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="BINo" id="BINo">
                                            B/I No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CntrNo" id="CntrNo">
                                            Cntr No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CntrType" id="CntrType">
                                            Cntr Type
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CntrSize" id="CntrSize">
                                            Cntr Size
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CntrOwner" id="CntrOwner">
                                            Cntr Owner
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CargoName" id="CargoName">
                                            Cargo Name
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CneeName" id="CneeName">
                                            Cnee Name
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CneePhone" id="CneePhone">
                                            Cnee Phone
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="PortOfLoading" id="PortOfLoading">
                                            Port Of Loading
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="LoadingDate" id="LoadingDate">
                                            Loading Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATA_VIA" id="ATA_VIA">
                                            ATA VIA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATD_VIA" id="ATD_VIA">
                                            ATD VIA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Port" id="Port">
                                            Port
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="TypeOfDeparture" id="TypeOfDeparture">
                                            Type Of Departure
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="VehicleNo" id="VehicleNo">
                                            Vehicle No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATA_ZU" id="ATA_ZU">
                                            ATA ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATD_ZU" id="ATD_ZU">
                                            ATD ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="WagonNo" id="WagonNo">
                                            Wagon No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATA_FD" id="ATA_FD">
                                            ATA FD
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Port" id="Port">
                                            Port
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="RelInst" id="RelInst">
                                            Rel.Inst
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="DateRelease" id="DateRelease">
                                            Date Release
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="InstGivenDate" id="InstGivenDate">
                                            Inst Given Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Shipper" id="Shipper">
                                            Shipper
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Agent" id="Agent">
                                            Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Payment" id="Payment">
                                            Payment Term
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="CollectAmount" id="CollectAmount">
                                            Collect Amount
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ChinaAgent" id="ChinaAgent">
                                            China Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ReturnDate" id="ReturnDate">
                                            Return Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="WagonNo" id="WagonNo">
                                            Wagon No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Mode" id="Mode">
                                            Mode
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Destination" id="Destination">
                                            Destination
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATA_ZU" id="ATA_ZU">
                                            ATA ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="ATD_ZU" id="ATD_ZU">
                                            ATD ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="TransferNo" id="TransferNo">
                                            Transfer No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="Alarm" id="Alarm">
                                            Alarm
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="FreeDays" id="FreeDays">
                                            Free Days
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input class="hidden" type="text" name="usertype" id="usertype" value="operator">
                            <button class="col-md-6 btn btn-primary mr-2 row save">Хадгалах</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection