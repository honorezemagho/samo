@extends('adminlte::page')

@section('content')
    <div class="container">
            <h1 class="text-center">@lang('panel.users')</h1><br>
            <a href="{{route('users.create')}}" class="btn btn-primary float-right">@lang("panel.add_new_user")</a>
    </div>


<section id="users" style="margin-top: 50px;">
    <div class="card">
        <div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="hidden-xs">@lang('panel.firstname') </th>
            <th>@lang('panel.lastname') </th>
            <th class="hidden-xs"> @lang('panel.email')</th>
            <th>@lang('panel.phone')</th>
            <th>@lang('panel.identification_piece')</th>
            <th>@lang('panel.identification')</th>
            <th>@lang('panel.country')</th>
            <th>@lang('panel.status')</th>
            <th>@lang('panel.actions')</th>
        </tr>
        </thead>

        <tbody>
        @if($users)

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->firstname}}</td>
                    <td ><a href="{{ URL::action('AdminUsersController@edit',  $user->id) }}">{{ $user->lastname}}</a></td>
                    <td> {{$user->email}}</td>
                    <td> {{$user->phone}}</td>
                    <td>{{$user->identification_piece->identification_fr}}</td>
                    <td> {{$user->identification}} </td>
                    <td>{{$user->land['name']}}</td>
                    <td> @if($user->is_active == 1)
                  @lang('panel.active')
                        @else
                        @lang('panel.inactive')
                             @endif
                    </td>
                    <td>@lang('panel.actions')</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
        </div>
    </div>
</section>
        <!-- /.card-body -->
  {{--      <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>--}}
    <!-- /.card -->
@endsection
