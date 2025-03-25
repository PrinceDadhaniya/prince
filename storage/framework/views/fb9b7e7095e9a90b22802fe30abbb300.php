<?php $__env->startSection('title', 'Download'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <h2 class="mb-3 text-primary fw-bold text-center">Download Documents</h2>

        <div class="row">
            <!-- Filters (Left Side) -->
            <div class="col-md-3">
                <div class="p-4 bg-white shadow rounded border">
                    <h5 class="fw-bold text-dark">Filter by</h5>

                    <!-- Search Filter -->
                    

                    <div class="mb-3">
                        <label class="fw-bold">Search Document Section</label>
                        <input type="text" id="searchProduct" class="form-control" placeholder="Enter product name">
                    </div>

                    <!-- Document Type Filter -->
                    <div class="mb-3">
                        <label class="fw-bold">Document Type</label>
                        <ul class="list-unstyled" id="document-type-list">
                            
                        </ul>
                    </div>

                    <!-- Document Category Filter -->
                    <div class="mb-3">
                        <label class="fw-bold">Document Category</label>
                        <ul class="list-unstyled" id="document-category-list">
                            
                        </ul>
                    </div>

                    <!-- Document Brand Filter -->
                    <div class="mb-3">
                        <label class="fw-bold">Document Brand</label>
                        <ul class="list-unstyled" id="document-brand-list">
                            
                        </ul>
                    </div>

                    
                    <button class="btn btn-outline-secondary w-100" id="resetFilters">Reset All</button>
                </div>
            </div>

            <!-- Documents (Right Side) -->
            <div class="col-md-9">
                <div class="row" id="documentsList">
                    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 mb-4">
                            <div class="document-card shadow-sm rounded overflow-hidden">
                                <div class="document-header text-center text-dark fw-bold"><?php echo e($document->product->name ?? 'N/A'); ?></div>
                                <div class="document-body p-3">
                                    <p class="text-muted small"><strong>Type:</strong> <?php echo e($document->type ?? 'N/A'); ?></p>
                                    <p class="text-muted small"><strong>Price:</strong> Rs <?php echo e($document->product->price ?? 'N/A'); ?></p>
                                    <p class="text-muted small"><strong>Category:</strong> <?php echo e($document->product->category->name ?? 'N/A'); ?></p>
                                    <p class="text-muted small"><strong>Brand:</strong> <?php echo e($document->product->brand->name ?? 'N/A'); ?></p>
                                </div>
                                <div class="document-footer text-center p-2">
                                    <a href="<?php echo e(route('download.document', ['path' => $document->file_path])); ?>" class="btn btn-primary btn-sm w-75 download-btn" data-file-path="<?php echo e($document->file_path); ?>">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                </div>
                                <div class="document-preview mt-3" style="display: none;">
                                    <iframe src="" width="100%" height="400px"></iframe>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('admin/js/jquery-1.12.4.min.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            function fetchDocumentCategories() {
                $.ajax({
                    url: "<?php echo e(route('fetch.document.categories')); ?>",
                    method: "GET",
                    // dataType: "json",  // Ensure response is treated as JSON
                    success: function(response) {
                        let documentCategoryList = $('#document-category-list');
                        documentCategoryList.empty();

                        if (!response.documentCategories || response.documentCategories.length === 0) {
                            documentCategoryList.html('<p class="text-muted">No document categories found.</p>');
                            return;
                        }

                        response.documentCategories.forEach(documentCategory => {
                            documentCategoryList.append(`
                                <li>
                                    <label class="d-flex align-items-center">
                                        <input type="checkbox" name="documentcategory[]" value="${documentCategory.id}" class="filter-checkbox document-category-checkbox me-2">
                                        <span class="text-truncate">${documentCategory.name}</span>
                                    </label>
                                </li>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        console.error("Status:", status);
                        console.error("Response Text:", xhr.responseText);
                        alert("Something went wrong while fetching document categories. Please try again.");
                    }
                });
            }

            function fetchSubcategories(categoryIds) {
                $.ajax({
                    url: "<?php echo e(route('fetch.subcategories')); ?>",
                    method: "GET",
                    data: {
                        category_ids: categoryIds
                    },
                    success: function(response) {
                        let subcategoryList = $('#subcategory-list');
                        subcategoryList.empty();

                        if (!response.subcategories || response.subcategories.length === 0) {
                            subcategoryList.html('<p class="text-muted">No subcategories found.</p>');
                            return;
                        }

                        response.subcategories.forEach(subcategory => {
                            subcategoryList.append(`
                                <li>
                                    <label class="d-flex align-items-center">
                                        <input type="checkbox" name="subcategory[]" value="${subcategory.id}" class="filter-checkbox subcategory-checkbox me-2">
                                        <span>${subcategory.name}</span>
                                    </label>
                                </li>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        alert("Something went wrong while fetching subcategories. Please try again.");
                    }
                });
            }

            function fetchDocumentTypes() {
                $.ajax({
                    url: "<?php echo e(route('fetch.document.types')); ?>",
                    method: "GET",
                    success: function(response) {
                        let documentTypeList = $('#document-type-list');
                        documentTypeList.empty();

                        if (!response.documentTypes || response.documentTypes.length === 0) {
                            documentTypeList.html('<p class="text-muted">No document types found.</p>');
                            return;
                        }

                        response.documentTypes.forEach(documentType => {
                            documentTypeList.append(`
                                <li>
                                    <label class="d-flex align-items-center">
                                        <input type="checkbox" name="documenttype[]" value="${documentType.id}" class="filter-checkbox documenttype-checkbox me-2">
                                        <span>${documentType.name}</span>
                                    </label>
                                </li>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        alert("Something went wrong while fetching document types. Please try again.");
                    }
                });
            }

            function fetchDocumentBrands() {
                $.ajax({
                    url: "<?php echo e(route('fetch.document.brands')); ?>",
                    method: "GET",
                    success: function(response) {
                        let documentBrandList = $('#document-brand-list');
                        documentBrandList.empty();

                        if (!response.documentBrands || response.documentBrands.length === 0) {
                            documentBrandList.html('<p class="text-muted">No document brands found.</p>');
                            return;
                        }

                        response.documentBrands.forEach(documentBrand => {
                            documentBrandList.append(`
                                <li>
                                    <label class="d-flex align-items-center">
                                        <input type="checkbox" name="documentbrand[]" value="${documentBrand.id}" class="filter-checkbox documentbrand-checkbox me-2">
                                        <span>${documentBrand.name}</span>
                                    </label>
                                </li>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        alert("Something went wrong while fetching document brands. Please try again.");
                    }
                });
            }

            function applyFilters() {
                let selectedCategories = [];
                let selectedSubcategories = [];
                let selectedBrands = [];
                let searchQuery = $('#searchProduct').val();

                $('input[name="category[]"]:checked').each(function() {
                    selectedCategories.push($(this).val());
                });

                $('input[name="subcategory[]"]:checked').each(function() {
                    selectedSubcategories.push($(this).val());
                });

                $('input[name="brand[]"]:checked').each(function() {
                    selectedBrands.push($(this).val());
                });

                try {
                    $.ajax({
                        url: "<?php echo e(route('filter.documents')); ?>",
                        method: "GET",
                        data: {
                            category: selectedCategories,
                            subcategory: selectedSubcategories,
                            brand: selectedBrands,
                            search: searchQuery
                        },
                        success: function(response) {
                            let documentsList = $('#documentsList');
                            documentsList.empty();

                            if (!response.documents || response.documents.length === 0) {
                                documentsList.html('<p class="text-center">No documents found.</p>');
                                return;
                            }

                            response.documents.forEach(document => {
                                let categoryName = document.product?.category?.name || 'N/A';
                                let brandName = document.product?.brand?.name || 'N/A';

                                documentsList.append(`
                                    <div class="col-md-12 mb-4">
                                        <div class="document-card shadow-sm rounded overflow-hidden">
                                            <div class="document-header text-center text-dark fw-bold">${document.product?.name || 'N/A'}</div>
                                            <div class="document-body p-3">
                                                <p class="text-muted small"><strong>Type:</strong> ${document.type || 'N/A'}</p>
                                                <p class="text-muted small"><strong>Price:</strong> Rs ${document.product?.price || 'N/A'}</p>
                                                <p class="text-muted small"><strong>Category:</strong> ${categoryName}</p>
                                                <p class="text-muted small"><strong>Brand:</strong> ${brandName}</p>
                                            </div>
                                            <div class="document-footer text-center p-2">
                                                <a href="${document.file_path}" class="btn btn-primary btn-sm w-75 download-btn" data-file-path="${document.file_path}">
                                                    <i class="fas fa-download"></i> Download
                                                </a>
                                            </div>
                                            <div class="document-preview mt-3" style="display: none;">
                                                <iframe src="" width="100%" height="400px"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", error);
                            alert("Something went wrong while fetching documents. Please try again.");
                        }
                    });
                } catch (error) {
                    console.error("Try-Catch Error:", error);
                    alert("An unexpected error occurred. Please reload the page and try again.");
                }
            }

            // Reset filters
            function resetFilters() {
                $('.filter-checkbox').prop('checked', false);
                $('#searchProduct').val('');
                $('#subcategory-list').empty();
                $('#subcategory-list').html('<p class="text-muted">Select a category to see subcategories.</p>');
                applyFilters(); // Call applyFilters to reload all documents
            }

            // Fetch subcategories when a category is selected
            $('input[name="category[]"]').change(function() {
                let selectedCategories = [];
                $('input[name="category[]"]:checked').each(function() {
                    selectedCategories.push($(this).val());
                });
                fetchSubcategories(selectedCategories);
                applyFilters();
            });

            // Apply filters when subcategory or brand is selected
            $('input[name="subcategory[]"], input[name="brand[]"]').change(function() {
                applyFilters();
            });

            // Event Listeners
            $('#applyFilters').click(applyFilters);
            $('#resetFilters').click(resetFilters);

            // Fetch all categories and subcategories on page load
            fetchDocumentCategories();

            // Fetch all document types on page load
            fetchDocumentTypes();

            // Fetch all document brands on page load
            fetchDocumentBrands();

            // Show document preview on download button click
            $('.download-btn').click(function(event) {
                event.preventDefault();
                let filePath = $(this).data('file-path');
                let documentCard = $(this).closest('.document-card');
                let documentPreview = documentCard.find('.document-preview');

                documentPreview.find('iframe').attr('src', filePath);
                documentPreview.show();
            });
        });
    </script>
    <style>
        /* Add this rule to change cursor to pointer on hover */
        div:hover {
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/frontend/pages/category-documents.blade.php ENDPATH**/ ?>