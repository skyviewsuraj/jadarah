
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
            Users
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">

        <div class="col-xl-12 col-lg-8">
            <div>
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row g-4">
                            <!-- <?php if(session('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?> -->
                            <div class="col-sm-auto">
                                <div>
                                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success" id="addproduct-btn"><i
                                            class="ri-add-line align-bottom me-1"></i> Create a new user</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" id="searchProductList"
                                            placeholder="Search ...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <div class="row align-items-center">

                            <div class="col-auto">
                                <div id="selection-element">
                                    <div class="my-n1 d-flex align-items-center text-muted">
                                        Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result
                                        <button type="button" class="btn btn-link link-danger p-0 ms-3 material-shadow-none"
                                            data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="col">
                            <div class="table-responsive">
                                <table id="searchable" class="table table-borderd responsive " style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__("Profile Picture")); ?></th>
                                            <th><?php echo e(__("Users Details")); ?></th>
                                            <th><?php echo e(__("Role")); ?></th>
                                            <th><?php echo e(__("Status")); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td>
                                                    
                                                    <div class="d-flex align-items-center">
                                                        <?php if($user->avatar): ?>
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
                                                            <h6 class="fs-14 mb-0"><?php echo e($user->name); ?></h6>
                                                            <p class="text-muted fs-12 mb-0"><?php echo e($user->email); ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    
                                                    <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="badge bg-primary"><?php echo e($role); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch" dir="ltr">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="userStatusSwitch-<?php echo e($user->id); ?>"
                                                            data-user-id="<?php echo e($user->id); ?>"
                                                            <?php echo e($user->status === 1 ? 'checked' : ''); ?>>
                                                    </div>
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
                                                <td colspan="6" class="text-center">No users found.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-product">Yes, Delete It!</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/users/index.blade.php ENDPATH**/ ?>