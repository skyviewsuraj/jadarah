<div class="dropdown d-inline-block">
    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ri-more-fill align-middle"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end">

        
        <!-- <li>
            <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="dropdown-item">
                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View
            </a>
        </li> -->

        
        <?php if(!in_array($role->id, ['2','3'])): ?>
            <li>
                <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="dropdown-item">
                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit
                </a>
            </li>
        <?php else: ?>
            <li>
                <p class="dropdown-item text-danger mb-0">
                    <i class="ri-error-warning-fill align-bottom me-2 text-danger"></i>
                    <?php echo e(__("System reserved role")); ?>

                </p>
            </li>
        <?php endif; ?>

        
        <?php if(!in_array($role->id, ['2','3'])): ?>
            <li>
                <a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo e($role->id); ?>">
                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                </a>
            </li>
        <?php endif; ?>

    </ul>
</div>


<?php if(!in_array($role->id, ['2','3'])): ?>
    <div id="delete<?php echo e($role->id); ?>" class="modal fade" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo e($role->id); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?php echo e($role->id); ?>">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <h4 class="mt-3"><?php echo e(__('Are You Sure ?')); ?></h4>
                    <p class="text-muted">
                        <?php echo e(__('Do you really want to delete the role')); ?>

                        <b><?php echo e($role->name); ?></b>?<br>
                        <strong><?php echo e(__("If any users are attached to this role, they will lose access!")); ?></strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="<?php echo e(route('roles.destroy', $role->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Yes, Delete')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/roles/action.blade.php ENDPATH**/ ?>