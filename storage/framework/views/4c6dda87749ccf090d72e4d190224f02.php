

<?php $__env->startSection('title', 'Course Details'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Courses <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Course Details <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Details for : <b><?php echo e($course->name); ?></b> </h4>
                    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-primary">Back to List</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Major:</strong> <?php echo e($course->major->name); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Course Code:</strong> <?php echo e($course->code); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Course Name:</strong> <?php echo e($course->name); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Prerequisite:</strong> <?php echo e($course->prerequisite ?? 'None'); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Course Type:</strong> <?php echo e(ucfirst($course->type)); ?>

                    </div>
                    <div class="mb-3">
                        <strong>Credit Hours:</strong> <?php echo e($course->credits_hours); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/courses/show.blade.php ENDPATH**/ ?>