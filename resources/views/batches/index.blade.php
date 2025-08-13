@extends('layouts.master')
@section('title')
    Batches
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Batches
        @endslot
        @slot('title')
            Batches
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
                                        <h5 class="card-title"> {{__("Batches")}}</h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="#" class="float-right btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#batchModal"><i
                                                    class="feather icon-arrow-left mr-2"></i>{{ __('Create New Batch') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-borderd responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __("Batch") }}</th>
                                                <th>{{ __("Status") }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($batches as $index => $batch)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        {{ $batch->year_start }} - {{ $batch->year_end }}
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                data-model="Batch"
                                                                data-id="{{ $batch->id }}"
                                                                {{ $batch->status === 1 ? 'checked' : '' }}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="#"
                                                                class="btn btn-sm btn-primary btn-edit"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#batchModal"
                                                                data-batch-id="{{ $batch->id }}"
                                                                data-year-start="{{ $batch->year_start }}"
                                                                data-year-end="{{ $batch->year_end }}">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form class="delete-form" action="{{ route('record.delete') }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="model" value="Batch"> <input type="hidden" name="id" value="{{ $batch->id }}"> <button type="button" class="btn btn-sm btn-danger delete-btn" data-model="Batch" data-id="{{ $batch->id }}" data-name="{{ $batch->year_start }} - {{ $batch->year_end }}">
                                                                    <i class="ri-delete-bin-fill"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No Batch found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $batches->links() }}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="batchModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="batchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batchModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="batchForm" method="POST">
                @csrf
                <input type="hidden" name="_method" id="formMethod">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="year_start" class="form-label">Start Year</label>
                        <input type="number" class="form-control" id="year_start" name="year_start">
                        @error('year_start')
                            <span class="text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="year_end" class="form-label">End Year</label>
                        <input type="number" class="form-control" id="year_end" name="year_end">
                        @error('year_end')
                            <span class="text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var createButton = document.querySelector('a[data-bs-target="#batchModal"]');
        var modal = document.getElementById('batchModal');
        var modalTitle = modal.querySelector('.modal-title');
        var batchForm = document.getElementById('batchForm');
        var formMethod = document.getElementById('formMethod');
        var yearStartInput = document.getElementById('year_start');
        var yearEndInput = document.getElementById('year_end');

        if (createButton) {
            createButton.addEventListener('click', function (event) {
                modalTitle.textContent = 'Create New Batch';
                batchForm.action = '{{ route('batches.store') }}';
                formMethod.value = 'POST';
                yearStartInput.value = '';
                yearEndInput.value = '';
            });
        }

        var editButtons = document.querySelectorAll('.btn-edit[data-bs-target="#batchModal"]');
        editButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var batchId = button.dataset.batchId; 
                var batchYearStart = button.dataset.yearStart;
                var batchYearEnd = button.dataset.yearEnd;

                modalTitle.textContent = 'Edit Batch: ' + batchYearStart + ' - ' + batchYearEnd;
                batchForm.action = '{{ url('batches') }}/' + batchId;
                formMethod.value = 'PUT';
                yearStartInput.value = batchYearStart;
                yearEndInput.value = batchYearEnd;
            });
        });

        var statusSwitches = document.querySelectorAll('.form-check-input');
        statusSwitches.forEach(function (switchInput) {
            switchInput.addEventListener('change', function () {
                var batchId = this.dataset.userId;
                var status = this.checked ? 1 : 0;
                fetch('/batches/' + batchId + '/status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ status: status })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Status updated successfully:', data);
                    })
                    .catch(error => {
                        console.error('Error updating status:', error);
                    });
            });
        });
    });
</script>
@endsection