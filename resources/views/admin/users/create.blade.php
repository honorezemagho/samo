@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="text-center">@lang('panel.add_new_user')</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="firstname">@lang('panel.firstname')</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname">@lang('panel.lastname')</label>
                            <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pays_id">@lang('panel.country')</label>
                        <select class="form-control select2" style="width: 100%;" name="pays_id">
                            @foreach($pays as $pays_id)
                                <option value="{{$pays_id->id}}" name="pays_id">{{$pays_id->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="identification_id">@lang('panel.identification_piece')</label>
                        <div class="input-group-prepend" style="margin-left: 20px">
                            <select id="identification_id" name="identification_id">
                                @foreach($identifications as $identification)
                                <option value="{{$identification->id}}" name="identification_id">{{$identification->code}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <input type="tel" name="identification" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">@lang('panel.email')</label>
                        <input type="email" name="email" placeholder="email@email.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">@lang('panel.phone')</label>
                        <input type="tel" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">@lang('panel.photo')</label>
                        <input type="file" class="form-control" name="photo_id">
                    </div>
                    <div class="form-group">
                        <label for="password">@lang('panel.password')</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                    <button type="submit" class="btn btn-primary">@lang('panel.save')</button>
                </div>
            </form>
        </div>
    </div>
@endsection
