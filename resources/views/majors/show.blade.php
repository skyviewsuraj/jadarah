@extends('layouts.master')

@section('title', 'Major Details')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Majors @endslot
        @slot('title') Major Details @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Details for {{ $major->name }}</h4>
                    <a href="{{ route('majors.index') }}" class="btn btn-primary">Back to List</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $major->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Duration:</strong> {{ $major->duration }} {{ $major->duration_type }}
                    </div>
                    <div class="mb-3">
                        <strong>Description:</strong> {{ $major->description ?? 'N/A' }}
                    </div>
                    <div class="mb-3">
                        <strong>Status:</strong> {{ $major->status ? 'Active' : 'Inactive' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection