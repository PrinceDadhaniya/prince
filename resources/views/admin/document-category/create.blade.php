@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Create Document Category</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Document Category</li>
                    <li class="breadcrumb-item active">Create Document Category</li>
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

        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Create Document Category
                    <a href="{{ route('admin.document-category.index') }}" class="btn btn-danger btn-sm text-white float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form id="createCategoryForm" action="{{ route('admin.document-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Slug</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="slug" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="description" required>
                        </div>
                    </div>

                    <!-- Serial Number -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Serial Number</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="serial_number" required>
                        </div>
                    </div>

                    <!-- Parent Category -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Parent Categories</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="parent_id">
                                <option value="">None</option>
                                @foreach ($parentCategories as $category)
                                    <!-- Display category and recursively display its children -->
                                    @include('admin.category.partials.category_option', ['category' => $category, 'level' => 0])
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    document.getElementById('createCategoryForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var form = event.target;

        fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  window.location.href = "{{ route('admin.document-category.index') }}";
              } else {
                  alert('An error occurred while creating the category.');
              }
          }).catch(error => {
              console.error('Error:', error);
              alert('An error occurred while creating the category.');
          });
    });
</script> --}}
@endsection
