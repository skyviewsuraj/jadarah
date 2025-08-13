@extends('layouts.master')

@section('title', 'Create Major')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Majors @endslot
        @slot('title') Create Major @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row g-4">
                        <div class="col-sm-auto">
                            <div>
                                <h5 class="card-title"> {{__("Create New Major")}}</h5>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="widgetbar">
                                    <a href="{{route('majors.index')}}" class="float-right btn btn-primary mr-2"><i
                                            class="feather icon-arrow-left mr-2"></i>{{ __('Back') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('majors.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="duration" class="form-label">Duration <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') }}">
                                @error('duration')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="duration_type" class="form-label">Duration Type <span class="text-danger">*</span></label>
                                <select class="form-select @error('duration_type') is-invalid @enderror" id="duration_type" name="duration_type">
                                    <option value="years" {{ old('duration_type') == 'years' ? 'selected' : '' }}>Years</option>
                                    <option value="hours" {{ old('duration_type') == 'hours' ? 'selected' : '' }}>Hours</option>
                                </select>
                                @error('duration_type')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create Major</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection