<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Document Brand</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>" data-bs-original-title="" title="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Document Brand</li>
                        <li class="breadcrumb-item active">Document Brand Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if(session('message')): ?>
                <div class="alert alert-success mb-3"><?php echo e(session('message')); ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Edit Document Brand
                        <a href="<?php echo e(route('admin.document-brand.index')); ?>"
                            class="btn btn-danger btn-sm text-white float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.document-brand.update', $documentBrand->id)); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <!-- Brand Name -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="name" value="<?php echo e($documentBrand->name); ?>" required>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" required><?php echo e($documentBrand->description); ?></textarea>
                            </div>
                        </div>

                        <!-- Serial Number -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Serial Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="serial_number"
                                    value="<?php echo e($documentBrand->serial_number); ?>" required>
                            </div>
                        </div>

                        <!-- Update Image -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Update Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control">
                                <?php if($documentBrand->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $documentBrand->image)); ?>"
                                        alt="Document Brand Image" class="mt-3" style="width: 150px; height: auto;">
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Document Brand</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\prince-gpm15\prince-gpm11\prince-gpm\group-project-main\resources\views/admin/document-brand/edit.blade.php ENDPATH**/ ?>