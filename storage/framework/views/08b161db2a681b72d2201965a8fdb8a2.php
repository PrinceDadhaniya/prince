<?php $__env->startSection('title', 'Download'); ?>

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card {
            padding: 1.5rem; /* Increased padding */
            margin-bottom: 1.5rem; /* Increased margin */
        }
        /* Add this rule to change cursor to pointer on hover */
        div:hover {
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container my-5">
        <h3 class="mb-4">Explore by Document Category</h3>

        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <a href="<?php echo e(route('category.documents', ['category' => 'CAD, Drawings, & Curves'])); ?>" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 p-3 d-flex flex-row align-items-center card-hover">
                        <i class="bi bi-box-seam fs-3 text-primary me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Category</h5>
                        </div>
                        
                    </div>
                </a>
            </div>

            <div class="col">
                <div class="card shadow-sm border-0 p-3 d-flex flex-row align-items-center card-hover" onclick="window.location.href='<?php echo e(route('category.documents', ['category' => 'Catalogs & Brochures'])); ?>'">
                    <i class="bi bi-file-earmark-text fs-3 text-success me-3"></i>
                    <div class="flex-grow-1">
                        <h5 class="mb-1">Catalogs & Brochures</h5>
                        
                    </div>
                    
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm border-0 p-3 d-flex flex-row align-items-center card-hover" onclick="window.location.href='<?php echo e(route('category.documents', ['category' => 'Conformity Assessments'])); ?>'">
                    <i class="bi bi-clipboard-check fs-3 text-danger me-3"></i>
                    <div class="flex-grow-1">
                        <h5 class="mb-1">Conformity Assessments</h5>
                    </div>
                    
                </div>
            </div>

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/frontend/pages/download.blade.php ENDPATH**/ ?>