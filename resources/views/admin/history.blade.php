@extends('layouts.admin_app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <nav class="content-menu">
            <div class="col-8 row">
                <ul class="nav">
                    <li class="nav-item active" name="logs_items">
                        <p class="nav-link" onclick="selection_changed('logs_items', 'active', 0)">Өнөөдөр</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="selection_changed('logs_items', 'active', 1)">7 хоног</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="selection_changed('logs_items', 'active', 2)">14 хоног</p>
                    </li>
                    <li class="nav-item" name="logs_items">
                        <p class="nav-link" onclick="selection_changed('logs_items', 'active', 3)">21 хоног</p>
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
                                    <th>REF No</th>
                                    <th>B/l No</th>
                                    <th>Cntr No</th>
                                    <th>Cargo Name</th>
                                    <th>Cnee Name</th>
                                    <th>Cnee Name</th>
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
                                    </tr>
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