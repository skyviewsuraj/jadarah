@extends('layouts.master')
@section('title')
    Categories
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Categories
        @endslot
        @slot('title')
            Categories
        @endslot
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
                                        <h5 class="card-title"> {{__("Categories")}}</h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="{{route('categories.create')}}" class="float-right btn btn-primary mr-2"><i
                                                    class="feather icon-arrow-left mr-2"></i>{{ __('Create a new Category') }}</a>
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
                                                <th>{{ __('Icon') }}</th>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Category Name') }}</th>
                                                <th>{{ __('Slug') }}</th>
                                                <th>{{ __('Featured') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($categories as $index => $user)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            @if ($user->avatar && File::exists(public_path('images/' . $user->avatar)))
                                                                <img src="{{ asset('images/' . $user->avatar) }}" alt="avatar"
                                                                    class="rounded-circle avatar-xs">
                                                            @else
                                                                <div class="avatar-xs d-inline-block">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">{{ $user->name }}</h6>
                                                                <p class="text-muted fs-12 mb-0">{{ $user->email }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- Display User's Role --}}
                                                        @foreach ($user->getRoleNames() as $role)
                                                            <span class="badge bg-primary">{{ $role }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                id="userStatusSwitch-{{ $user->id }}"
                                                                data-user-id="{{ $user->id }}"
                                                                {{ $user->status === 1 ? 'checked' : '' }}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ route('users.edit', $user->id) }}"
                                                                class="btn btn-sm btn-primary">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this user?');">
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
                                                    <td colspan="8" class="text-center">No Data found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $categories->links() }}
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