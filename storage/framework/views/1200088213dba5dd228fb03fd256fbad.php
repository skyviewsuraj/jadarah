
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Permissions'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Permissions
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Permissions
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="container my-5">
        <div class="card shadow-lg p-5">
            <h1 class="card-title text-center mb-4">Permission Creator</h1>

            <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="row">
                <!-- Form for creating a single permission -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Create Single Permission</h2>
                            <form action="<?php echo e(route('permissions.create')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
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
                            <form action="<?php echo e(route('permissions.bulk')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>     
<?php $__env->startSection('script'); ?>
    
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/roles/permissions.blade.php ENDPATH**/ ?>