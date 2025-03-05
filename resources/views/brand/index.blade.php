@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Brands</h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach($brands as $brand)
        <div class="col">
            <a href="{{ route('brand.category.show', ['brand_id' => $brand->id, 'category_id' => $brand->category_id]) }}" class="text-decoration-none text-dark">
                <div class="card shadow-sm border-4-primary p-3 card-hover" style="height: 100%;">
                    <h5 class="card-title text-center text-white" style="background-color: #2561a8">{{ $brand->name }}</h5>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset($brand->image) }}" class="img-fluid" alt="{{ $brand->name }}" style="max-height: 100px; object-fit: cover;">
                        </div>
                        <div class="col-6">
                            <p class="" style="max-width: 100%;">
                                {{ \Illuminate\Support\Str::words($brand->description, 12, '...') }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
