@extends('layouts.admin_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <nav class="content-menu">
                <div class="col-9 row">
                        <ul class="nav">
                            <div class="col-3">
                                <li class="nav-item active" name="permission_usertype">
                                    <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 0), set_usertype()">Operator</p>
                                </li>
                            </div>
                            <div class="col-3">
                                <li class="nav-item" name="permission_usertype">
                                    <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 1), set_usertype()">Account</p>
                                </li>
                            </div>
                            <div class="col-3">
                                <li class="nav-item" name="permission_usertype">
                                    <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 2), set_usertype()">Cnee</p>
                                </li>
                            </div>
                            <div class="col-3">
                                <li class="nav-item" name="permission_usertype">
                                    <p class="nav-link" onclick="selection_changed('permission_usertype', 'active', 3), set_usertype()">Shipper</p>
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
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="RefNo">
                                            Ref No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="BINo">
                                            B/I No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cntr No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cntr Type
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cntr Size
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cntr Owner
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cargo Name
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cnee Name
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Cnee Phone
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Port Of Loading
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Loading Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATA VIA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATD VIA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Port
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Type Of Departure
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Vehicle No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATA ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATD ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Wagon No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATA FD
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Port
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Rel.Inst
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Date Release
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Inst Given Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Shipper
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Payment Term
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Collect Amount
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            China Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Return Date
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Wagon No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Mode
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Destination
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATA ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            ATD ZU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Transfer No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Alarm
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="CheckBox_Permissions[]" value="">
                                            Free Days
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input class="hidden" type="text" name="usertype" id="usertype">
                            <button class="col-md-6 btn btn-primary mr-2 row save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection