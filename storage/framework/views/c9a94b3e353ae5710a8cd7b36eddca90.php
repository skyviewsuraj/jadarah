

<?php $__env->startSection('title', 'Courses'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Courses <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> All Courses <?php $__env->endSlot(); ?>
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
                                        <h5 class="card-title"> <?php echo e(__("Courses List")); ?></h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex">
                                        <form id="search-form" action="<?php echo e(route('courses.index')); ?>" method="GET">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" name="search" id="searchProductList" placeholder="Search ..." value="<?php echo e(request('search')); ?>">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="<?php echo e(route('courses.create')); ?>" class="float-right btn btn-primary mr-2"><i
                                                    class="feather icon-arrow-left mr-2"></i><?php echo e(__('Create a new Course')); ?></a>
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
                                                <th><?php echo e(__("Code")); ?></th>
                                                <th><?php echo e(__("Name")); ?></th>
                                                <th><?php echo e(__("Major")); ?></th>
                                                <th><?php echo e(__("Prerequisite")); ?></th> 
                                                <th><?php echo e(__("Type")); ?></th>
                                                <th><?php echo e(__("Credits Hours")); ?></th>
                                                <th><?php echo e(__("Status")); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($course->code); ?></td>
                                                    <td><?php echo e($course->name); ?></td>
                                                    <td><?php echo e($course->major->name); ?></td>
                                                    <td><?php echo e($course->prerequisite ?? '-'); ?></td>
                                                    <td>
                                                        <span class="badge <?php if($course->type == 'mandated'): ?> bg-success <?php elseif($course->type == 'elective'): ?> bg-primary <?php else: ?> bg-secondary <?php endif; ?>"><?php echo e(ucfirst($course->type)); ?></span>
                                                    </td>
                                                    <td><?php echo e($course->credits_hours); ?></td>
                                                    <td>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input class="form-check-input" type="checkbox" role="switch"
                                                                data-model="Course"
                                                                data-id="<?php echo e($course->id); ?>"
                                                                <?php echo e($course->status === 1 ? 'checked' : ''); ?>>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="<?php echo e(route('courses.show', $course)); ?>" class="btn btn-sm btn-info">
                                                                <i class="ri-eye-fill"></i>
                                                            </a>
                                                            <a href="<?php echo e(route('courses.edit', $course)); ?>"
                                                            class="btn btn-sm btn-primary">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form action="<?php echo e(route('courses.destroy', $course)); ?>" method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this course?');">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    <i class="ri-delete-bin-fill"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="7" class="text-center">No courses found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($courses->links()); ?>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/courses/index.blade.php ENDPATH**/ ?>