@extends('layouts.admin_app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <nav class="content-menu">
            <div class="col-11 row">
                <ul class="nav">
                    <li class="nav-item active" name="ref_type_choice">
                        <p class="nav-link" onclick="selection_changed('ref_type_choice', 'active', 0)">Generation</p>
                    </li>
                    <li class="nav-item" name="ref_type_choice">
                        <p class="nav-link" onclick="selection_changed('ref_type_choice', 'active', 1)">Japan</p>
                    </li>
                    <li class="nav-item" name="ref_type_choice">
                        <p class="nav-link" onclick="selection_changed('ref_type_choice', 'active', 2)">Korean</p>
                    </li>
                    <li class="nav-item" name="ref_type_choice">
                        <p class="nav-link" onclick="selection_changed('ref_type_choice', 'active', 3)">Export</p>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Бараанууд</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>No</th>
                                    <th>REF No</th>
                                    <th>B/l No</th>
                                    <th>Cntr No</th>
                                    <th>Cargo Name</th>
                                    <th>Cnee Name</th>
                                    <th>Cnee Name</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->RefID}}" class="edit disabled_edit"></td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->BINo}}" class="edit disabled_edit"></td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->CntrNo}}" class="edit disabled_edit"></td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->CargoName}}" class="edit disabled_edit"></td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->CneeName}}" class="edit disabled_edit"></td>
                                            <td><input type="text" name="edit[]" placeholder="{{$order->CneePhone}}" class="edit disabled_edit"></td>
                                            <td>
                                            @if ($order->status=='Success')
                                                <label class="badge badge-success">
                                            @elseif ($order->status=='Progressing')
                                                <label class="badge badge-warning">
                                            @elseif ($order->status=='Pending')
                                                <label class="badge badge-danger">
                                            @endif
                                            {{$order->status}}
                                            </label></td>
                                            <td class="py-1">
                                                <img onclick="edit()" src="{{asset('images/assets/Edit.png')}}" alt="Edit">
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
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