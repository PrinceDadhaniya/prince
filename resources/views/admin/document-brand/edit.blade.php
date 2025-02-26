{{-- @extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Document Brand</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html" data-bs-original-title="" title="">
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

    <div class="container">
        <h1>Edit Document Brand</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.document-brand.update', $documentBrand->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $documentBrand->name) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $documentBrand->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($documentBrand->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $documentBrand->image) }}" alt="Document Type Image" width="150">
                        <input type="hidden" name="existing_image" value="{{ $documentBrand->image }}">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection --}}




@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Document Brand</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}" data-bs-original-title="" title="">
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
            @if (session('message'))
                <div class="alert alert-success mb-3">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Edit Document Brand
                        <a href="{{ route('admin.document-brand.index') }}"
                            class="btn btn-danger btn-sm text-white float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.document-brand.update', $documentBrand->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Brand Name -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="name" value="{{ $documentBrand->name }}" required>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" required>{{ $documentBrand->description }}</textarea>
                            </div>
                        </div>

                        <!-- Serial Number -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Serial Number</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="serial_number"
                                    value="{{ $documentBrand->serial_number }}" required>
                            </div>
                        </div>

                        <!-- Update Image -->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Update Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control">
                                @if ($documentBrand->image)
                                    <img src="{{ asset('storage/' . $documentBrand->image) }}"
                                        alt="Document Brand Image" class="mt-3" style="width: 150px; height: auto;">
                                @endif
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

@endsection
