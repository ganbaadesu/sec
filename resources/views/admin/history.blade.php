@extends('layouts.admin_app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-8">
            <nav class="content-menu">
                <ul class="nav">
                    <li class="nav-item active">
                        <input  type="text" id="history_calendar" style="display: none"><p class="nav-link" id="history_date" onchange="change_history_content(this.value, 'data')"></p>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <nav class="content-menu">
            <div class="col-12 row">
                <ul class="nav">
                    <li class="nav-item active" name="logs_items">
                        <p class="nav-link" onclick="change_date('logs_items', 'active', 0, 'history_date')">Өнөөдөр</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="change_date('logs_items', 'active', 7, 'history_date')">7 хоног</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="change_date('logs_items', 'active', 14, 'history_date')">14 хоног</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="change_date('logs_items', 'active', 21, 'history_date')">21 хоног</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="change_date('logs_items', 'active', 30, 'history_date')">30 хоног</p>
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
                <p class="card-title">History</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-header">
                                    <th>Он сар өдөр</th>
                                    <th>Хэрэглэгч</th>
                                    <th>Багана</th>
                                    <th>Хуучин мэдээлэл</th>
                                    <th>Шинэ мэдээлэл</th>
                                    </tr>
                                </thead>
                                <tbody id="logs_tbody">
                                    @foreach ($logs as $log)
                                        <tr>
                                            <td>{{$log->created_at}}</td>
                                            <td>{{$log->user_id}}</td>
                                            <td>{{$log->column_name}}</td>
                                            <td>{{$log->old_data}}</td>
                                            <td>{{$log->new_data}}</td>
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