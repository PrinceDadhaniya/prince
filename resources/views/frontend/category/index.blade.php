@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="my-4 text-center">Categories</h3>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .category-box,
            .subcategory-box {
                padding: 15px;
                margin: 10px 0;
                cursor: pointer;
                border: 1px solid #ddd;
                border-radius: 5px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .category-box:hover,
            .subcategory-box:hover {
                background-color: #f0f0f0;
            }

            .category-container,
            .subcategory-container {
                height: 300px;
                overflow-y: auto;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                background-color: #f9f9f9;
            }

            .subcategory-container {
                min-width: 200px;
            }

            /* Flexbox for scrollable horizontal layout */
            .d-flex {
                gap: 20px;
                overflow-x: auto;
                white-space: nowrap;
            }

            .modal-backdrop.show {
                background-color: rgba(0, 0, 0, 0.5);
                /* Black with 50% opacity */
            }

            /* Modal Content Position and Styling */
            .modal-content {
                top: 120px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                /* Optional shadow for better visibility */
            }
        </style>

        <!-- Button to Open Modal -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
            Open Categories
        </button>

        <!-- Modal -->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Categories</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Categories Layout -->
                        <div class="row mt-4">
                            <!-- Parent Categories Section -->
                            <div class="col-md-2">
                                <h4>Parent Categories</h4>
                                <div class="category-container">
                                    @foreach ($categories as $category)
                                        <div id="category-{{ $category->id }}" class="category-box"
                                            onclick="showSubCategories({{ $category->id }}, '{{ $category->name }}')">
                                            {{ $category->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Subcategories and Deeper Levels -->
                            <div class="col-md-10">
                                <div class="d-flex">
                                    <!-- Subcategories Container -->
                                    <div>
                                        <h5 id="subcategory-title"></h5>
                                        <div id="subcategory-container" class="subcategory-container"></div>
                                    </div>

                                    <!-- Sub-Subcategories Container -->
                                    <div>
                                        <h5 id="subsubcategory-title"></h5>
                                        <div id="subsubcategory-container" class="subcategory-container"></div>
                                    </div>

                                    <!-- Sub-Sub-Subcategories Container -->
                                    <div>
                                        <h5 id="subsubsubcategory-title"></h5>
                                        <div id="subsubsubcategory-container" class="subcategory-container"></div>
                                    </div>

                                    <!-- Sub-Sub-Sub-Subcategories Container -->
                                    <div>
                                        <h5 id="subsubsubsubcategory-title"></h5>
                                        <div id="subsubsubsubcategory-container" class="subcategory-container"></div>
                                    </div>

                                    <!-- Sub-Sub-Sub-Sub-Subcategories Container -->
                                    <div>
                                        <h5 id="subsubsubsubsubcategory-title"></h5>
                                        <div id="subsubsubsubsubcategory-container" class="subcategory-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JavaScript for Dynamic Rendering -->
        <script>
            function showSubCategories(categoryId, categoryName) {
                document.getElementById("subcategory-title").innerText = categoryName;
                resetContainers(["subcategory-container", "subsubcategory-container", "subsubsubcategory-container",
                    "subsubsubsubcategory-container", "subsubsubsubsubcategory-container"
                ]);

                @foreach ($categories as $category)
                    if (categoryId === {{ $category->id }}) {
                        @foreach ($category->children as $child)
                            appendToContainer("subcategory-container", {{ $child->id }}, "{{ $child->name }}",
                                "showSubSubCategories");
                        @endforeach
                    }
                @endforeach
            }

            function showSubSubCategories(subcategoryId, subcategoryName) {
                document.getElementById("subsubcategory-title").innerText = subcategoryName;
                resetContainers(["subsubcategory-container", "subsubsubcategory-container", "subsubsubsubcategory-container",
                    "subsubsubsubsubcategory-container"
                ]);

                @foreach ($categories as $category)
                    @foreach ($category->children as $child)
                        if (subcategoryId === {{ $child->id }}) {
                            @foreach ($child->children as $subchild)
                                appendToContainer("subsubcategory-container", {{ $subchild->id }}, "{{ $subchild->name }}",
                                    "showSubSubSubCategories");
                            @endforeach
                        }
                    @endforeach
                @endforeach
            }

            function showSubSubSubCategories(subSubCategoryId, subSubCategoryName) {
                document.getElementById("subsubsubcategory-title").innerText = subSubCategoryName;
                resetContainers(["subsubsubcategory-container", "subsubsubsubcategory-container",
                    "subsubsubsubsubcategory-container"
                ]);

                @foreach ($categories as $category)
                    @foreach ($category->children as $child)
                        @foreach ($child->children as $subchild)
                            if (subSubCategoryId === {{ $subchild->id }}) {
                                @foreach ($subchild->children as $subSubChild)
                                    appendToContainer("subsubsubcategory-container", {{ $subSubChild->id }},
                                        "{{ $subSubChild->name }}", "showSubSubSubSubCategories");
                                @endforeach
                            }
                        @endforeach
                    @endforeach
                @endforeach
            }

            function showSubSubSubSubCategories(subSubSubCategoryId, subSubSubCategoryName) {
                document.getElementById("subsubsubsubcategory-title").innerText = subSubSubCategoryName;
                resetContainers(["subsubsubsubcategory-container", "subsubsubsubsubcategory-container"]);

                @foreach ($categories as $category)
                    @foreach ($category->children as $child)
                        @foreach ($child->children as $subchild)
                            @foreach ($subchild->children as $subSubChild)
                                if (subSubSubCategoryId === {{ $subSubChild->id }}) {
                                    @foreach ($subSubChild->children as $subSubSubChild)
                                        appendToContainer("subsubsubsubcategory-container", {{ $subSubSubChild->id }},
                                            "{{ $subSubSubChild->name }}", "showSubSubSubSubSubCategories");
                                    @endforeach
                                }
                            @endforeach
                        @endforeach
                    @endforeach
                @endforeach
            }

            function showSubSubSubSubSubCategories(subSubSubSubCategoryId, subSubSubSubCategoryName) {
                document.getElementById("subsubsubsubsubcategory-title").innerText = subSubSubSubCategoryName;
                resetContainers(["subsubsubsubsubcategory-container"]);

                @foreach ($categories as $category)
                    @foreach ($category->children as $child)
                        @foreach ($child->children as $subchild)
                            @foreach ($subchild->children as $subSubChild)
                                @foreach ($subSubChild->children as $subSubSubChild)
                                    if (subSubSubSubCategoryId === {{ $subSubSubChild->id }}) {
                                        @foreach ($subSubSubChild->children as $subSubSubSubChild)
                                            appendToContainer("subsubsubsubsubcategory-container", null,
                                                "{{ $subSubSubSubChild->name }}");
                                        @endforeach
                                    }
                                @endforeach
                            @endforeach
                        @endforeach
                    @endforeach
                @endforeach
            }

            // Utility Functions
            function resetContainers(containerIds) {
                containerIds.forEach(id => document.getElementById(id).innerHTML = "");
            }

            function appendToContainer(containerId, id, name, clickHandler = "") {
                const container = document.getElementById(containerId);
                const clickAction = clickHandler ? `onclick="${clickHandler}(${id}, '${name}')"` : "";
                container.innerHTML += `<div class="subcategory-box" ${clickAction}">${name}</div>`;
            }
        </script>


    </div>
@endsection
