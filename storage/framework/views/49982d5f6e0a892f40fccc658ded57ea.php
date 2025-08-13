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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="<?php echo e(URL::asset('build/js/pages/select2.init.js')); ?>"></script>


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

    // Display Info Message
    <?php if(Session::has('info')): ?>
        toastr.info("<?php echo e(Session::get('info')); ?>");
    <?php endif; ?>

    // Display Warning Message
    <?php if(Session::has('warning')): ?>
        toastr.warning("<?php echo e(Session::get('warning')); ?>");
    <?php endif; ?>
    // Initialize DataTables
    $('.data-table').DataTable({
        responsive: true,   
    });
    // Initialize Flatpickr
    flatpickr(".flatpickr", {
        enableTime: true,
        dateFormat: "Y-m-d",    
    });
    // Initialize Pickr
    const pickr = Pickr.create({
        el: '.color-picker',
        theme: 'classic', // or 'monolith', or 'nano'
        default: '#42445a',
        swatches: [
            '#42445a',
            '#ff0000',
            '#00ff00',
            '#0000ff',
            '#ffff00',
            '#ff00ff',
            '#00ffff',
        ],
        components: {
            preview: true,
            opacity: true,
            hue: true,
            interaction: {
                hex: true,
                rgba: true,
                input: true,
                clear: true,
                save: true
            }
        }   
    });
    
});
document.addEventListener('DOMContentLoaded', function () {
    const statusSwitches = document.querySelectorAll('.form-check-input[type="checkbox"][data-model]');
    
    statusSwitches.forEach(function(toggleSwitch) {
        toggleSwitch.addEventListener('change', function () {
            const modelName = this.dataset.model;
            const recordId = this.dataset.id;
            const newStatus = this.checked ? 1 : 0;
            const url = '<?php echo e(route('status.update')); ?>';
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ 
                    model: modelName,
                    id: recordId,
                    status: newStatus 
                }),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok.');
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message);
                toastr.success(data.message);
            })
            .catch(error => {
                console.error('There was an error updating the status:', error);
                this.checked = !this.checked; 
                toastr.error('Failed to update status.');
            });
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const modelName = this.dataset.model;
            const recordId = this.dataset.id;
            const recordName = this.dataset.name || 'this record';
            
            Swal.fire({
                title: 'Are you sure?',
                text: `You are about to delete ${recordName}. This action cannot be undone!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('<?php echo e(route('record.delete')); ?>', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        },
                        body: JSON.stringify({
                            model: modelName,
                            id: recordId
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(error => Promise.reject(error));
                        }
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire(
                            'Deleted!',
                            data.message,
                            'success'
                        );
                        // Safely remove the closest table row
                        event.target.closest('tr').remove();
                    })
                    .catch(error => {
                        Swal.fire(
                            'Error!',
                            error.message || 'Failed to delete the record.',
                            'error'
                        );
                    });
                }
            });
        });
    });
});
</script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldContent('script-bottom'); ?>
<?php /**PATH C:\wamp64\www\laraveljadrah\resources\views/layouts/vendor-scripts.blade.php ENDPATH**/ ?>