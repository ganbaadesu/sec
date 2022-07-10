@extends('layouts/app')
@section('main')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($message!=NULL)
                    <h3>{{$message}}<h3>
                @else
                    <p class="card-title">Orders</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr class="table-header">
                                            @foreach ($permissions as $permission)
                                                <th>{{$permission}}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($index = 0; $index < sizeof($data[$permissions[0]]); $index++)
                                            <tr>
                                                @for ($i = 0; $i < sizeof($permissions); $i++)
                                                    <td>{{$data[$permissions[$i]][$index]}}</td>
                                                @endfor
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection