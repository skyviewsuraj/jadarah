@extends('layouts.master')
@section('title')
    @lang('Permissions')
@endsection
@section('css')
@endsection
@section('content')
 @component('components.breadcrumb')
        @slot('li_1')
            Permissions
        @endslot
        @slot('title')
            Permissions
        @endslot
    @endcomponent
    <div class="container my-5">
        <div class="card shadow-lg p-5">
            <h1 class="card-title text-center mb-4">Permission Creator</h1>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <!-- Form for creating a single permission -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Create Single Permission</h2>
                            <form action="{{ route('permissions.create') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name_single" class="form-label">Permission Name</label>
                                    <input type="text" id="name_single" name="name" placeholder="e.g., user.view" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Create</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Form for creating bulk permissions -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Create Bulk Permissions</h2>
                            <form action="{{ route('permissions.bulk') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name_bulk" class="form-label">Base Permission Name</label>
                                    <input type="text" id="name_bulk" name="name" placeholder="e.g., users" class="form-control" required>
                                    <small class="form-text text-muted">This will create: "users.view", "users.create", "users.edit", "users.delete"</small>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Create Bulk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection     
@section('script')
    
@endsection  