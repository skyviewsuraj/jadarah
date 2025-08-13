
<?php $__env->startSection('title'); ?>
    Majors
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Majors
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            All Majors
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="contentbar">
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="col-lg-12">
                    <div class="card dashboard-card m-b-30">
                        <div class="card-header">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <h5 class="card-title"> <?php echo e(__("Majors List")); ?></h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="<?php echo e(route('majors.create')); ?>" class="float-right btn btn-primary mr-2"><i
                                                    class="feather icon-arrow-left mr-2"></i><?php echo e(__('Create New Major')); ?></a>
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
                                                <th><?php echo e(__("Name")); ?></th>
                                                <th><?php echo e(__("Duration")); ?></th>
                                                <th><?php echo e(__("Description")); ?></th>
                                                <th><?php echo e(__("Status")); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($index + 1); ?></td>
                                                    <td><?php echo e($major->name); ?></td>
                                                    <td><?php echo e($major->duration); ?> <?php echo e($major->duration_type); ?></td>
                                                    <td><?php echo e(Str::limit($major->description, 50)); ?></td>
                                                            
                                                    <td>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                data-model="Major"
                                                                data-id="<?php echo e($major->id); ?>"
                                                                <?php echo e($major->status === 1 ? 'checked' : ''); ?>>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="<?php echo e(route('majors.show', $major)); ?>" class="btn btn-sm btn-info"><i class="ri-eye-fill"></i></a>
                                                            <a href="<?php echo e(route('majors.edit', $major)); ?>"
                                                                class="btn btn-sm btn-primary btn-edit">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form class="delete-form" action="<?php echo e(route('record.delete')); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <input type="hidden" name="model" value="Major"> <input type="hidden" name="id" value="<?php echo e($major->id); ?>"> <button type="button" class="btn btn-sm btn-danger delete-btn" data-model="Major" data-id="<?php echo e($major->id); ?>" data-name="<?php echo e($major->name); ?>">
                                                                    <i class="ri-delete-bin-fill"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="4" class="text-center">No majors found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($majors->links()); ?>

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
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" id="formMethod">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="year_start" class="form-label">Start Year</label>
                        <input type="number" class="form-control" id="year_start" name="year_start">
                        <?php $__errorArgs = ['year_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="year_end" class="form-label">End Year</label>
                        <input type="number" class="form-control" id="year_end" name="year_end">
                        <?php $__errorArgs = ['year_end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
                batchForm.action = '<?php echo e(route('batches.store')); ?>';
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
                batchForm.action = '<?php echo e(url('batches')); ?>/' + batchId;
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
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/majors/index.blade.php ENDPATH**/ ?>