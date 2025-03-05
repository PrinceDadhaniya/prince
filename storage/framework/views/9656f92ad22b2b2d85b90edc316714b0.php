

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($brand->name); ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo e(asset($brand->logo)); ?>" class="img-fluid" alt="<?php echo e($brand->name); ?>">
        </div>
        <div class="col-md-6">
            <p><?php echo e($brand->description); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\prince\resources\views/brand/show.blade.php ENDPATH**/ ?>