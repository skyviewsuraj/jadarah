@extends('layouts.master')

@section('title', 'Courses')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Courses @endslot
        @slot('title') All Courses @endslot
    @endcomponent
    <div class="contentbar">
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="col-lg-12">
                    <div class="card dashboard-card m-b-30">
                        <div class="card-header">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <h5 class="card-title"> {{__("Courses List")}}</h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex">
                                        <form id="search-form" action="{{ route('courses.index') }}" method="GET">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" name="search" id="searchProductList" placeholder="Search ..." value="{{ request('search') }}">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="{{route('courses.create')}}" class="float-right btn btn-primary mr-2"><i
                                                    class="feather icon-arrow-left mr-2"></i>{{ __('Create a new Course') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-borderd responsive" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __("Code") }}</th>
                                                <th>{{ __("Name") }}</th>
                                                <th>{{ __("Major") }}</th>
                                                <th>{{ __("Prerequisite") }}</th> 
                                                <th>{{ __("Type") }}</th>
                                                <th>{{ __("Credits Hours") }}</th>
                                                <th>{{ __("Status") }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($courses as $index => $course)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $course->code }}</td>
                                                    <td>{{ $course->name }}</td>
                                                    <td>{{ $course->major->name }}</td>
                                                    <td>{{ $course->prerequisite ?? '-' }}</td>
                                                    <td>
                                                        <span class="badge @if ($course->type == 'mandated') bg-success @elseif ($course->type == 'elective') bg-primary @else bg-secondary @endif">{{ ucfirst($course->type) }}</span>
                                                    </td>
                                                    <td>{{ $course->credits_hours }}</td>
                                                    <td>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                data-model="Course"
                                                                data-id="{{ $course->id }}"
                                                                {{ $course->status === 1 ? 'checked' : '' }}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">
                                                                <i class="ri-eye-fill"></i>
                                                            </a>
                                                            <a href="{{ route('courses.edit', $course) }}"
                                                            class="btn btn-sm btn-primary">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form action="{{ route('courses.destroy', $course) }}" method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this course?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    <i class="ri-delete-bin-fill"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">No courses found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $courses->links() }}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('script')
<script>

</script>
@endsection