@extends('layouts.master')

@section('title', 'Edit Course')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Courses @endslot
        @slot('title') Edit Course @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0"> Edit Course: {{ $course->name }}</h5>
                        <a href="{{route('courses.index')}}" class="btn btn-primary"><i
                                class="feather icon-arrow-left me-2"></i>{{ __('Back') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('courses.update', $course) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="major_id" class="form-label">Major <span class="text-danger">*</span></label>
                                <select class="js-example-basic-single @error('major_id') is-invalid @enderror" id="major_id" name="major_id" >
                                    <option value="">Select Major</option>
                                    @foreach($majors as $major)
                                        <option value="{{ $major->id }}" {{ old('major_id', $course->major_id) == $major->id ? 'selected' : '' }}>
                                            {{ $major->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('major_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="code" class="form-label">Course Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code', $course->code) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="The course code must be alphanumeric (e.g., CS101, PHY201-A).">
                                @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Course Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $course->name) }}" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="prerequisite" class="form-label">Prerequisite (Optional)</label>
                            <select class="js-example-basic-single @error('prerequisite') is-invalid @enderror" id="prerequisite" name="prerequisite">
                                <option value="">No Prerequisite</option>
                                @foreach($courses as $prereqCourse)
                                    <option value="{{ $prereqCourse->code }}" {{ (old('prerequisite', $course->prerequisite) == $prereqCourse->code) ? 'selected' : '' }}>
                                        {{ $prereqCourse->name }} ({{ $prereqCourse->code }})
                                    </option>
                                @endforeach
                            </select>
                            @error('prerequisite')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="type" class="form-label">Course Type<span class="text-danger">*</span></label>
                                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" >
                                    <option value="mandated" {{ old('type', $course->type) == 'mandated' ? 'selected' : '' }}>Mandated</option>
                                    <option value="elective" {{ old('type', $course->type) == 'elective' ? 'selected' : '' }}>Elective</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="credits_hours" class="form-label">Credit Hours<span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('credits_hours') is-invalid @enderror" id="credits_hours" name="credits_hours" value="{{ old('credits_hours', $course->credits_hours) }}" >
                                @error('credits_hours')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection