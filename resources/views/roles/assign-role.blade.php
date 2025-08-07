@extends('layouts.master')
@section('title')
    @lang('Assign Role to User')
@endsection
@section('css')
@endsection
@section('content')
 @component('components.breadcrumb')
        @slot('li_1')
            User
        @endslot
        @slot('title')
            Assign Role to User
        @endslot
    @endcomponent
    <div class="contentbar">   
        <div class="row">
            <div class="col-lg-12">
                <div class="card dashboard-card m-b-30">
                    <div class="card-header">
                        <div>
                            <div class="widgetbar">
                              <a href="{{route('roles.index')}}" class="float-right btn btn-primary mr-2"><i
                                  class="feather icon-arrow-left mr-2"></i>{{ __('Back') }}</a> </div>
                            </div>
                            <h5 class="card-title"> {{__("Assign Role to User")}}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.assign-role') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user">Select User</label>
                                <select name="user_id" id="user" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="role">Select Role</label>
                                <select name="role" id="role" class="form-control" required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Assign Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
