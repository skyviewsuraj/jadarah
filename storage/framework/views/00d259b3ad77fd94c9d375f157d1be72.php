

<?php $__env->startSection('title', 'Major Details'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Majors <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Major Details <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Details for <?php echo e($major->name); ?></h4>
                    <a href="<?php echo e(route('majors.index')); ?>" class="btn btn-primary">Back to List</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> <?php echo e($major->name); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Duration:</strong> <?php echo e($major->duration); ?> <?php echo e($major->duration_type); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Description:</strong> <?php echo e($major->description ?? 'N/A'); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Status:</strong> <?php echo e($major->status ? 'Active' : 'Inactive'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/majors/show.blade.php ENDPATH**/ ?>