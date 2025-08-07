
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Assign Role to User'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            User
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Assign Role to User
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="contentbar">   
        <div class="row">
            <div class="col-lg-12">
                <div class="card dashboard-card m-b-30">
                    <div class="card-header">
                        <div>
                            <div class="widgetbar">
                              <a href="<?php echo e(route('roles.index')); ?>" class="float-right btn btn-primary mr-2"><i
                                  class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a> </div>
                            </div>
                            <h5 class="card-title"> <?php echo e(__("Assign Role to User")); ?></h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('users.assign-role')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="user">Select User</label>
                                <select name="user_id" id="user" class="form-control" required>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> (<?php echo e($user->email); ?>)</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="role">Select Role</label>
                                <select name="role" id="role" class="form-control" required>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Assign Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/roles/assign-role.blade.php ENDPATH**/ ?>