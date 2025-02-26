




<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Main Document</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('admin')); ?>" data-bs-original-title="" title="">                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
            <li class="breadcrumb-item">Document</li>
            <li class="breadcrumb-item active">Add New Document</li>
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
    <h2>Add New Document</h2>
    <form action="<?php echo e(route('admin.document.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        

        <div class="mb-3">
            <label for="type" class="form-label">Document Name</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>

        
        

        <div class="document mb-3" id="document-0">
            <label for="documents[0][type]" class="form-label">Document Type</label>
            <select name="documents[0][type]" class="form-control" required>
                <option value="Software">Software</option>
                <option value="PDF">PDF</option>
                <option value="Driver">Driver</option>
            </select>
            
        </div>

        <!-- Category -->
        <div class="form-group mb-4">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select Category</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"
                        <?php echo e(old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : ''); ?>>
                        <?php echo e($category->name); ?>

                    </option>
                    <?php if($category->children): ?>
                        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.product.partials.category-options', [
                                'category' => $childCategory,
                                'level' => 1,
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Brand -->
        <div class="form-group mb-4">
            <label for="brand_id">Brand</label>
            <select name="brand_id" id="brand_id" class="form-control">
                <option value="">Select Brand</option>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($brand->id); ?>"
                        <?php echo e(old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : ''); ?>>
                        <?php echo e($brand->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="file_path" class="form-label">File Path or URL</label>
            <input type="text" class="form-control" id="file_path" name="file_path" required>
        </div>

        <button type="submit" class="btn btn-primary mb-3  float-end">Add Document</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\prince-gpm11\prince-gpm\group-project-main\resources\views/admin/document/create.blade.php ENDPATH**/ ?>