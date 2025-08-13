@extends('layouts.master')

@section('title', 'Course Details')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Courses @endslot
        @slot('title') Course Details @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Details for : <b>{{ $course->name }}</b> </h4>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">Back to List</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Major:</strong> {{ $course->major->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Course Code:</strong> {{ $course->code }}
                    </div>
                    <div class="mb-3">
                        <strong>Course Name:</strong> {{ $course->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Prerequisite:</strong> {{ $course->prerequisite ?? 'None' }}
                    </div>
                    <div class="mb-3">
                        <strong>Course Type:</strong> {{ ucfirst($course->type) }}
                    </div>
                    <div class="mb-3">
                        <strong>Credit Hours:</strong> {{ $course->credits_hours }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
