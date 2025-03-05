

<?php $__env->startSection('title','Contact Us Details'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 grid-margin">

            <?php if(session('message')): ?>
            <div class="alert alert-success mb-3"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card mb-3 mt-4">
                <div class="card-body">
                    <h5 class="card-title text-primary fs-3">Contact-Us Details</h5>
                    <?php if($contactUsDetail): ?>
                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <p id="address"><?php echo e($contactUsDetail->address); ?></p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <p id="phone"><?php echo e($contactUsDetail->phone); ?></p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <p id="email"><?php echo e($contactUsDetail->email); ?></p>
                        </div>
                    <?php else: ?>
                        <p>No contact details available.</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ITP\Downloads\prince (3) (1)\prince\resources\views/admin/contact-us-details/index.blade.php ENDPATH**/ ?>