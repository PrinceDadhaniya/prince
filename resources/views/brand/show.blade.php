@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $brand->name }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($brand->logo) }}" class="img-fluid" alt="{{ $brand->name }}">
        </div>
        <div class="col-md-6">
            <p>{{ $brand->description }}</p>
        </div>
    </div>
</div>
@endsection
