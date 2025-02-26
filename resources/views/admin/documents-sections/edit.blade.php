@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit Document Section</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}" data-bs-original-title="" title=""> <svg
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
        <h2>Edit Document</h2>
        <div class="card-header">
            <h5 class="mb-0">Edit Documents Sections
            <a href="{{ url('admin/documents-sections')}}" class="btn btn-danger btn-sm text-white float-end">Back</a>
            </h5>
        </div>
        <form action="{{ route('admin.documents-sections.update', $document->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="document_name" class="form-label">Document Name</label>
                <input type="text" class="form-control" id="document_name" name="document_name" value="{{ $document->document_name }}" required>
            </div>

            <div class="document mb-3" id="document-0">
                <label for="documents[0][document_type]" class="form-label">Document Type</label>
                <select name="documents[0][document_type]" class="form-control" required>
                    <option value="Software" {{ $document->document_type == 'Software' ? 'selected' : '' }}>Software</option>
                    <option value="PDF" {{ $document->document_type == 'PDF' ? 'selected' : '' }}>PDF</option>
                    <option value="Driver" {{ $document->document_type == 'Driver' ? 'selected' : '' }}>Driver</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $document->brand_id == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <input type="text" name="category_id" class="form-control" id="category_id" value="{{ $document->category_id }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description">{{ $document->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="file_path">File Path</label>
                <input type="text" name="file_path" class="form-control" id="file_path" value="{{ $document->file_path }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
