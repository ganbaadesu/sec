@extends('layouts.admin_app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Orders</p>
                <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
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
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->Ref_ID}}</td>
                                        <td>{{$order->BL_No}}</td>
                                        <td>{{$order->Cntr_No}}</td>
                                        <td>{{$order->Cargo_Name}}</td>
                                        <td>{{$order->Cnee_Name}}</td>
                                        <td>{{$order->Cnee_Phone}}</td>
                                    </tr>
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