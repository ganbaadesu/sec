@extends('layouts.admin_app')

@section('content')<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Хэрэглэгчдийн жагсаалт</h4>
        <div class="table-responsive">
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr class="table-header">
                <th>
                  Нэр
                </th>
                <th>
                  Е-майл
                </th>
                <th>
                  Хэрэглэгчийн төрөл
                </th>
                <th>
                  Утас
                </th>
                <th>
                  Нүүр зураг
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                    {{$user["name"]}}
                    </td>
                    <td>
                    {{$user["email"]}}
                    </td>
                    <td>
                    {{$user["usertype"]}}
                    </td>
                    <td>
                    {{$user["phone"]}}
                    </td>
                    <td>
                    <img class="profile-pic" src="{{asset($user["profile"])}}" alt="profile"/>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection