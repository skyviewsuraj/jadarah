<script src="<?php echo e(URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/node-waves/waves.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/plugins/lord-icon-2.1.0.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/plugins.js')); ?>"></script>
<!-- jQuery should only be included once -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables & other external libraries -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>

<script src="<?php echo e(URL::asset('build/js/toastr/toastr.min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('build/libs/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/@simonwep/pickr/pickr.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/form-pickers.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/datatables.init.js')); ?>"></script>
<script>
$(document).ready(function() {
    // Display Success Message
    <?php if(Session::has('success')): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>");
    <?php endif; ?>

    // Display Error Message
    <?php if(Session::has('error')): ?>
        toastr.error("<?php echo e(Session::get('error')); ?>");
    <?php endif; ?>
});
</script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldContent('script-bottom'); ?>
<?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/layouts/vendor-scripts.blade.php ENDPATH**/ ?>