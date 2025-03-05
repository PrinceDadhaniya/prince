<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Page Not Found</div>

                <div class="card-body">
                    <h3>404 - Page Not Found</h3>
                    <p>Sorry, the page you are looking for could not be found.</p>
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ITP\Downloads\prince (3) (1)\prince\resources\views/errors/404.blade.php ENDPATH**/ ?>