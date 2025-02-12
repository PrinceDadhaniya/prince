@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">

                <h1 class="mb-3">{{ $category->name }}</h1>

                <h3 style="color: #2561a8; padding:bottom:10px;">{{ $category->description }}</h3>
                <p>{{ $category->slug }}</p>
                <div class="d-flex mt-3">
                    <a href="#" class="btn text-white" style="background-color: #2561a8; padding:5px 30px;"><b>Contact
                            Sales</b></a>
                    <a href="#" class="btn" style="border: 1px solid black; margin-left:20px;"><b>Contact
                            Support</b></a>

                </div>
            </div>
            <div class="col-md-3">


                <img src="{{ asset('uploads/category/' . $category->image) }}" alt="{{ $category->name }}"
                    style="width: 300px; margin-left:300px">

            </div>
        </div>

    </div>
    </div>



    <div class="container">


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="product" data-bs-toggle="tab" data-bs-target="#product-tab-pane"
                    type="button" role="tab" aria-controls="product-tab-pane" aria-selected="true"
                    style="border-top:2px solid #2561a8">Product</button>
            </li>

        </ul>




        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">




                <main class="product-list">

                    @foreach ($category->products as $product)
                        <div class="product-item">
                            @php
                                $images = json_decode(str_replace('\\', '/', $product->images), true);
                            @endphp

                            @if (!empty($images) && is_array($images))
                                @foreach ($images as $image)
                                    @if (!empty($image))
                                        <img src="{{ url($image) }}" alt="Product Image" class="img-thumbnail">
                                    @else
                                        <p>No image available for this entry.</p>
                                    @endif
                                @endforeach
                            @else
                                <p>No images available</p>
                            @endif

                            <p class="product-code">{{ $product['serial_number'] }}</p>
                            <p class="product-desc"><b>{{ $product['name'] }}</b></p>
                            <a href="{{ url('/product', $product->id) }}" class="btn"
                                style="border: 1px solid black; padding:5px 100px;">View Details</a>
                            <a href="" class="documents-link">Documents</a>
                        </div>
                    @endforeach
                </main>


            </div>

        </div>


    </div>
@endsection
<style>
    .card {
        margin-left: 20px;
        margin-right: 20px;
    }
</style>
