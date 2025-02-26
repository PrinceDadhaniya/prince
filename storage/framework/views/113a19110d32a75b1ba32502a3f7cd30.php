<tr>
    <td><?php echo e($category->id); ?></td>
    <td><?php echo e($category->name); ?></td>
    <td><?php echo e($category->parent ? $category->parent->name : 'N/A'); ?></td>
    <td>
        <a href="<?php echo e(route('admin.document-category.edit', $category->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
        <form action="<?php echo e(route('admin.document-category.destroy', $category->id)); ?>" method="POST" style="display:inline-block;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </td>
</tr>
<?php if($category->children): ?>
    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('admin.document-category.category_item', ['category' => $child, 'level' => $level + 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<script>
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this category?')) {
                fetch(this.action, {
                    method: 'POST',
                    body: new FormData(this)
                }).then(response => {
                    if (response.ok) {
                        window.location.href = "<?php echo e(route('admin.document-category.index')); ?>";
                    }
                });
            }
        });
    });
</script>
<?php /**PATH D:\prince\prince-gpm11\prince-gpm\group-project-main\resources\views/admin/document-category/category_item.blade.php ENDPATH**/ ?>