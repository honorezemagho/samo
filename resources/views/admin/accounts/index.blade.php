@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">@lang('panel.accounts')</h1><br>
    </div>


    <section id="users" style="margin-top: 50px;">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-xs">@lang('panel.firstname') </th>
                        <th>@lang('panel.lastname') </th>
                        <th>@lang('panel.phone')</th>
                        <th>@lang('panel.balance')</th>
                        <th>@lang('panel.secret_code')</th>
                        <th>@lang('panel.actions')</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if( $accounts)

                        @foreach( $accounts as $account)
                            <tr>
                                <td>{{ $account->user->firstname}}</td>
                                <td >{{ $account->user->lastname}}</td>
                                <td> {{ $account->user->phone}}</td>
                                <td>{{ $account->amount}}</td>
                                <td> {{ $account->secret_code}} </td>
                                <td>@lang('panel.actions')</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
