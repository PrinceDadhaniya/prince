@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Add New Document Section</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ url('admin') }}"><i class="feather icon-home"></i></a></li> --}}
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}" data-bs-original-title="" title=""> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item">Document</li>
                        <li class="breadcrumb-item active">Add New Document Section</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <h2>Add New Document</h2>
        <div class="card-header">
            @php
                $documentsSections = $documentsSections ?? null;
            @endphp
            <h5 class="mb-0">{{ $documentsSections ? 'Create Documents Sections' : 'Edit Documents Sections' }}
            <a href="{{ url('admin/documents-sections')}}" class="btn btn-danger btn-sm text-white float-end">Back</a>
            </h5>
        </div>
        <form action="{{ route('admin.documents-sections.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="document_name" class="form-label">Document Name</label>
                <input type="text" class="form-control" id="document_name" name="document_name" required>
            </div>

            <div class="document mb-3" id="document-0">
                <label for="documents[0][document_type]" class="form-label">Document Type</label>
                <select name="documents[0][document_type]" class="form-control" required>
                    <option value="Software">Software</option>
                    <option value="PDF">PDF</option>
                    <option value="Driver">Driver</option>
                </select>
            </div>

            <!-- Category -->
            {{-- <div class="form-group mb-4">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @if ($category->children)
                            @foreach ($category->children as $childCategory)
                                @include('admin.product.partials.category-options', [
                                    'category' => $childCategory,
                                    'level' => 1,
                                ])
                            @endforeach
                        @endif
                    @endforeach
                </select>
            </div> --}}


            <div class="form-group mb-4">
                <label for="category_id">Category</label>
                <input type="text" name="category_id" class="form-control" id="category_id" required>
            </div>

            <!-- Brand -->
            <div class="form-group mb-4">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}"
                            {{ old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="product_id">Product</label>
                <input type="text" name="product_id" class="form-control" id="product_id" required>
            </div> --}}

            {{-- <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" id="type" required>
            </div> --}}

            {{-- <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div> --}}

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>

            <div class="form-group">
                <label for="file_path">File Path</label>
                <input type="text" name="file_path" class="form-control" id="file_path" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>
@endsection
