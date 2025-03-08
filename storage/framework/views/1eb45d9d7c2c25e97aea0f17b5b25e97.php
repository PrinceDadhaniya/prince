

<?php $__env->startSection('title','Contact Us Details'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 grid-margin">

            <?php if(session('message')): ?>
            <div class="alert alert-success mb-3"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary fs-3">Contact-Us Details</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $contactUsDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($detail->id); ?></td>
                                <td><?php echo e($detail->address); ?></td>
                                <td><?php echo e($detail->phone); ?></td>
                                <td><?php echo e($detail->email); ?></td>
                                <td>
                                    <a href="<?php echo e(url('admin/contact-us-details/'.$detail->id.'/edit')); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/admin/contact-us-details/index.blade.php ENDPATH**/ ?>