<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit Document Section</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin')); ?>" data-bs-original-title="" title=""> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item">Document</li>
                        <li class="breadcrumb-item active">Edit Document Section</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="container mt-5">
        <h2>Edit Document</h2>
        <div class="card-header">
            <h5 class="mb-0">Edit Documents Sections
            <a href="<?php echo e(url('admin/documents-sections')); ?>" class="btn btn-danger btn-sm text-white float-end">Back</a>
            </h5>
        </div>
        <form action="<?php echo e(route('admin.documents-sections.update', $document->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="document_name" class="form-label">Document Name</label>
                <input type="text" class="form-control" id="document_name" name="document_name" value="<?php echo e($document->document_name); ?>" required>
            </div>

            <div class="document mb-3" id="document-0">
                <label for="documents[0][document_type]" class="form-label">Document Type</label>
                <select name="documents[0][document_type]" class="form-control" required>
                    <option value="Software" <?php echo e($document->document_type == 'Software' ? 'selected' : ''); ?>>Software</option>
                    <option value="PDF" <?php echo e($document->document_type == 'PDF' ? 'selected' : ''); ?>>PDF</option>
                    <option value="Driver" <?php echo e($document->document_type == 'Driver' ? 'selected' : ''); ?>>Driver</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($brand->id); ?>" <?php echo e($document->brand_id == $brand->id ? 'selected' : ''); ?>>
                            <?php echo e($brand->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                
                <select name="category_name" id="category_name" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->name); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"><?php echo e($document->description); ?></textarea>
            </div>

            <div class="form-group">
                <label for="file_path">File Path</label>
                <input type="text" name="file_path" class="form-control" id="file_path" value="<?php echo e($document->file_path); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/admin/documents-sections/edit.blade.php ENDPATH**/ ?>