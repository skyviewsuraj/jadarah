@extends('layouts.master')
@section('title')
    @lang('Create a new User')
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            User
        @endslot
        @slot('title')
            Create a new User
        @endslot
    @endcomponent
    <div class="contentbar">
        <div class="row">
            <div class="col-lg-12">
                <div class="card dashboard-card m-b-30">
                    <div class="card-header">
                        <div class="row g-4">
                            <div class="col-sm-auto">
                                <div>
                                    <h5 class="card-title"> {{__("Create a new User")}}</h5>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="widgetbar">
                                        <a href="{{route('roles.index')}}" class="float-right btn btn-primary mr-2"><i
                                                class="feather icon-arrow-left mr-2"></i>{{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST" class="needs-validation" novalidate
                              enctype="multipart/form-data">
                            @csrf

                            <!-- User Information Section -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Username <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" id="username"
                                           placeholder="Enter username" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" id="useremail"
                                           placeholder="Enter email address" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Section -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="userpassword" class="form-label">Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           id="userpassword" placeholder="Enter password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="input-password">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           name="password_confirmation" id="input-password"
                                           placeholder="Enter Confirm Password" required>
                                </div>
                            </div>
                            
                            <!-- Personal & Contact Information -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                           name="mobile" value="{{ old('mobile') }}" id="mobile"
                                           placeholder="Enter mobile number">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" data-provider="flatpickr"
                                        data-date-format="d M, Y" name="dob" value="{{ old('dob') }}" id="dob">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender">
                                        <option value="" selected disabled>Select Gender</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Address and Location Section -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror"
                                              name="address" id="address" rows="3"
                                              placeholder="Enter full address">{{ old('address') }}</textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pin_code" class="form-label">Pin Code</label>
                                    <input type="text" class="form-control @error('pin_code') is-invalid @enderror"
                                           name="pin_code" value="{{ old('pin_code') }}" id="pin_code"
                                           placeholder="Enter pin code">
                                    @error('pin_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="country_id" class="form-label">Country</label>
                                    <select class="form-select @error('country_id') is-invalid @enderror" name="country_id" id="country_id">
                                        <option value="" selected disabled>Select Country</option>
                                        {{-- Assuming a $countries variable is passed from the controller --}}
                                        {{-- @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state_id" class="form-label">State</label>
                                    <select class="form-select @error('state_id') is-invalid @enderror" name="state_id" id="state_id">
                                        <option value="" selected disabled>Select State</option>
                                        {{-- Assuming a $states variable is passed from the controller --}}
                                        {{-- @foreach ($states as $state)
                                            <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>
                                                {{ $state->name }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                    @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="city_id" class="form-label">City</label>
                                    <select class="form-select @error('city_id') is-invalid @enderror" name="city_id" id="city_id">
                                        <option value="" selected disabled>Select City</option>
                                        {{-- Assuming a $cities variable is passed from the controller --}}
                                        {{-- @foreach ($cities as $city)
                                            <option value="{{ $city->id }}" {{ old('city_id') == $city->id ? 'selected' : '' }}>
                                                {{ $city->name }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                    @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Avatar and Role Section -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="input-avatar">Avatar <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                           name="avatar" id="input-avatar" required>
                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="role-select">Role <span class="text-danger">*</span></label>
                                    <select class="form-select @error('role') is-invalid @enderror"
                                            aria-label="Default select example" name="role" id="role-select" required>
                                        <option selected disabled>Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}" {{ old('role') == $role->name ? 'selected' : '' }}>
                                                {{$role->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="reset" class="btn btn-danger mr-1"><i class="fa fa-ban"></i> {{ __("Reset")}}</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
                                    {{ __("Create")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
