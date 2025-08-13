
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Users'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Users
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Students
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
                                        <h5 class="card-title"> <?php echo e(__("Students")); ?></h5>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="widgetbar">
                                            <a href="<?php echo e(route('users.create')); ?>" class="float-right btn btn-primary mr-2"><i
                                                    class="feather icon-arrow-left mr-2"></i><?php echo e(__('Create a new user')); ?></a>
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
                                                <th><?php echo e(__("Profile Picture")); ?></th>
                                                <th><?php echo e(__("Student Details")); ?></th>
                                                <th><?php echo e(__("Batch")); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($index + 1); ?></td>
                                                    <td>
                                                        
                                                        <div class="d-flex align-items-center">
                                                            <?php if($user->avatar && File::exists(public_path('images/' . $user->avatar))): ?>
                                                                <img src="<?php echo e(asset('images/' . $user->avatar)); ?>" alt="avatar"
                                                                    class="rounded-circle avatar-xs">
                                                            <?php else: ?>
                                                                <div class="avatar-xs d-inline-block">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                        <?php echo e(strtoupper(substr($user->name, 0, 1))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0"><?php echo e(ucfirst($user->name)); ?></h6>
                                                                <p class="text-muted fs-12 mb-0"><?php echo e($user->email); ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary"> <?php echo e($user->studentDetails?->batch?->year_start); ?> - <?php echo e($user->studentDetails?->batch?->year_end); ?></span>
                                                    </td>
                                                    <td>
                                                        
                                                        <div class="d-flex gap-2">
                                                            <a href="<?php echo e(route('users.edit', $user->id)); ?>"
                                                                class="btn btn-sm btn-primary">
                                                                <i class="ri-pencil-fill"></i>
                                                            </a>
                                                            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this user?');">
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
                                                    <td colspan="6" class="text-center">No students found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($users->links()); ?>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/users/students.blade.php ENDPATH**/ ?>