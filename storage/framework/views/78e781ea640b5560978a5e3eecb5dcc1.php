

<?php $__env->startSection('title','Edit Contact Us Details'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 grid-margin">

            <?php if(session('message')): ?>
            <div class="alert alert-success mb-3"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <form action="<?php echo e(url('admin/contact-us-details/'.$detail->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="card mb-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary fs-3">Edit Contact-Us Details</h5>
                        <a href="<?php echo e(url('admin/contact-us-details/index')); ?>" class="btn btn-danger btn-sm text-white float-end">Back</a>
                        <div class="form-group mb-3 mt-4">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" id="address" rows="3" required><?php echo e($detail->address); ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="<?php echo e($detail->phone); ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo e($detail->email); ?>" required>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary text-white">Update Contact-us Details</button>
                </div>

            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ITP\Downloads\prince (3) (1)\prince\resources\views/admin/contact-us-details/edit.blade.php ENDPATH**/ ?>