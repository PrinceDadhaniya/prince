@extends('layouts.admin')

@section('title','Admin Setting')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">

            @if (session('message'))
            <div class="alert alert-success mb-3">{{session('message')}}</div>
            @endif

            <form action="{{url('/admin/contact-us-details')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card mb-3 mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary fs-3">Contact-Us Details</h5>
                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary text-white">Create Contact-us Details</button>
                </div>

            </form>
        </div>
    </div>

@endsection
