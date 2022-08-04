@extends('layouts/app')
@section('main')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($message!=NULL)
                    <h3>{{$message}}<h3>
                @else
                    <p class="card-title">Бараанууд</p>
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
                                        @foreach ($orders as $items)
                                            <tr>
                                                @foreach ($permissions as $permission)
                                                    <td>{{$items[$permission]}}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
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