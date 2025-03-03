@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit Document Category</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.document-categories.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Document Category</li>
                        <li class="breadcrumb-item active">Edit Document Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success mb-3">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Edit Document Category
                        <a href="{{ route('admin.document-categories.index') }}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form id="update-form" action="{{ route('admin.document-categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                            </div>
                        </div>

                        <!-- Slug -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="slug" value="{{ $category->slug }}">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="description" value="{{ $category->description }}">
                            </div>
                        </div>

                        <!-- Serial Number -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Serial Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="serial_number" value="{{ $category->serial_number }}">
                            </div>
                        </div>

                        <!-- Parent Category -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Parent Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="parent_id">
                                    <option value="">None</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}" {{ $category->parent_id == $parentCategory->id ? 'selected' : '' }}>{{ $parentCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Update Image -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Update Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control">
                                @if ($category->image)
                                    <img src="{{ asset('uploads/category/' . $category->image) }}" alt="Category Image" class="mt-3" style="width: 100px; height: 100px;">
                                @endif
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" id="update-button">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Ensure form submission is not prevented -->
@endsection



