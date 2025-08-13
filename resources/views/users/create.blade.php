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
                                        <a href="{{route('users.index')}}" class="float-right btn btn-primary mr-2"><i
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
                                    <input type="date" class="form-control  @error('dob') is-invalid @enderror" data-provider="flatpickr"
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
                            <!-- Student-specific fields -->
                            <div id="student-fields" style="display: {{ old('role') == 'student' ? 'block' : 'none' }};">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h5 class="mt-4">Student Specifications</h5>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="batch_id" class="form-label">Batch <span class="text-danger">*</span></label>
                                        <select class="form-select @error('batch_id') is-invalid @enderror"
                                                name="batch_id" id="batch_id">
                                            <option value="" selected disabled>Select Batch</option>
                                            {{-- Assuming a $batches variable is passed from the controller --}}
                                            @foreach ($batches as $batch)
                                                <option value="{{ $batch->id }}" {{ old('batch_id') == $batch->id ? 'selected' : '' }}>
                                                    {{ $batch->year_start }} - {{ $batch->year_end }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('batch_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="student_bio" class="form-label">Short Bio <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('student_bio') is-invalid @enderror"
                                                  name="student_bio" id="student_bio" rows="3"
                                                  placeholder="Tell us about yourself">{{ old('student_bio') }}</textarea>
                                        @error('student_bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Instructor-specific fields (Hidden by default) -->
                            <div id="instructor-fields" style="display: {{ old('role') == 'instructor' ? 'block' : 'none' }};">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h5 class="mt-4">Instructor Specifications</h5>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="specialty" class="form-label">Specialty <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('specialty') is-invalid @enderror"
                                               name="specialty" id="specialty"
                                               value="{{ old('specialty') }}" required>
                                        @error('specialty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="instructor_bio" class="form-label">Short Bio <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('instructor_bio') is-invalid @enderror"
                                                  name="instructor_bio" id="instructor_bio" rows="3"
                                                  placeholder="Tell us about yourself">{{ old('instructor_bio') }}</textarea>
                                        @error('instructor_bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const roleSelect = document.getElementById('role-select');
        const instructorFields = document.getElementById('instructor-fields');
        const studentFields = document.getElementById('student-fields');

        function toggleRoleFields() {
            instructorFields.style.display = 'none';
            studentFields.style.display = 'none';
            instructorFields.querySelectorAll('input, textarea').forEach(field => {
                field.removeAttribute('required');
            });
            studentFields.querySelectorAll('select').forEach(field => {
                field.removeAttribute('required');
            });
            if (roleSelect.value === 'instructor') {
                instructorFields.style.display = 'block';
                instructorFields.querySelectorAll('input, textarea').forEach(field => {
                    field.setAttribute('required', 'required');
                });
            } else if (roleSelect.value === 'student') {
                studentFields.style.display = 'block';
                studentFields.querySelectorAll('select').forEach(field => {
                    field.setAttribute('required', 'required');
                });
            }
        }
        roleSelect.addEventListener('change', toggleRoleFields);
        toggleRoleFields();
    });
    </script>
@endsection
