@extends('layouts.master')
@section('title')
    @lang('Edit User')
@endsection
@section('css')
@endsection
@section('content')
 @component('components.breadcrumb')
        @slot('li_1')
            User
        @endslot
        @slot('title')
            Edit User
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
                            <h5 class="card-title"> {{__("Edit User")}}</h5>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-sm-end">
                            <div class="widgetbar">
                            <a href="{{route('users.index')}}" class="float-right btn btn-primary mr-2"><i
                                class="feather icon-arrow-left mr-2"></i>{{ __('Back') }}</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update',$user->id) }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        
                    
                        <div class="form-group">
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