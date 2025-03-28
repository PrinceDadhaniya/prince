

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Brands</h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <a href="<?php echo e(route('brand.category.show', ['brand_id' => $brand->id, 'category_id' => $brand->category_id])); ?>" class="text-decoration-none text-dark">
                <div class="card shadow-sm border-4-primary p-3 card-hover" style="height: 100%;">
                    <h5 class="card-title text-center text-white" style="background-color: #2561a8"><?php echo e($brand->name); ?></h5>
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo e(asset($brand->image)); ?>" class="img-fluid" alt="<?php echo e($brand->name); ?>" style="max-height: 100px; object-fit: cover;">
                        </div>
                        <div class="col-6">
                            <p class="" style="max-width: 100%;">
                                <?php echo e(\Illuminate\Support\Str::words($brand->description, 12, '...')); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/brand/index.blade.php ENDPATH**/ ?>