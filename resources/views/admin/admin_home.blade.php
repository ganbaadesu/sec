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
                        <table class="table table-hover table-striped">
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
                                <tr>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td>Name</td>
                                    <td><label class="badge badge-danger">Name</label></td>
                                    <td class="py-1">
                                        <img src="{{asset('images/assets/Edit.png')}}" alt="Edit" onclick="">
                                        <img src="{{asset('images/assets/Menu.png')}}" alt="Menu" onclick="">
                                    </td>
                                </tr>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->Ref_ID}}</td>
                                        <td>{{$order->BL_No}}</td>
                                        <td>{{$order->Cntr_No}}</td>
                                        <td>{{$order->Cargo_Name}}</td>
                                        <td>{{$order->Cnee_Name}}</td>
                                        <td>{{$order->Cnee_Phone}}</td>
                                        @if ($order->status=='Pending')
                                            <td class="badge badge-danger">
                                        @endif
                                        @if ($order->status=='Progressing')
                                            <td class="badge badge-warning">
                                        @endif
                                        @if ($order->status=='Success')
                                            <td class="badge badge-success">
                                        @endif
                                        {{$order->status}}</td>
                                        <td class="py-1">
                                            <img src="{{asset('images/assets/Edit')}}" alt="Edit">
                                            <img src="{{asset('images/assets/Menu')}}" alt="Menu">
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
    </div>
</div>
@endsection