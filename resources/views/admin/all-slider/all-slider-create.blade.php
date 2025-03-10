@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Card for Main Slider -->
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <h3 class="d-flex justify-content-between align-items-center">
                        Add Main Slider
                        <a href="{{ url('admin/all-slider') }}" class="btn btn-danger btn-sm">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="description" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Upload File</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" id="chk-ani">
                                    <label class="form-check-label" for="chk-ani">
                                        Checked = Hidden, Unchecked = Visible
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Card for Second Slider -->
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card mb-3">
                <div class="card-header bg-secondary text-white">
                    <h3 class="d-flex justify-content-between align-items-center">
                        Add Second Slider
                        <a href="{{ url('admin/all-slider') }}" class="btn btn-danger btn-sm">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.secondsliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="description" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Upload File</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" id="chk-ani-second">
                                    <label class="form-check-label" for="chk-ani-second">
                                        Checked = Hidden, Unchecked = Visible
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Card for Mini Slider -->
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h3 class="d-flex justify-content-between align-items-center">
                        Add Mini Slider
                        <a href="{{ url('admin/all-slider') }}" class="btn btn-danger btn-sm">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/minisiders/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="description" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Upload File</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" id="chk-ani-mini">
                                    <label class="form-check-label" for="chk-ani-mini">
                                        Checked = Hidden, Unchecked = Visible
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
