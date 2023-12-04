@extends('layouts.navbar')
@section('content')

    <head>
        <link rel="stylesheet" href={{ asset('css/product.css') }}?t={{ env('VERSION_TIME') }}>
    </head>

    <div class="mangkas-product">
        <div class="big-title">Product</div>

        <div class="mangkas-card">

            @foreach ($products as $product)
                <div class="card card-jarak card-page-jarak">
                    <div class="card_image">
                        <img src="{{ asset('storage/image/' . $product->product_logo) }}" alt="card image">
                    </div>
                    <br><br><br>
                    <h2>{{ $product->product_name }}</h2>
                    <h3>IDR {{ $product->product_price }}</h3>
                    <div class="card_star">
                        <img src="assets/star-rate.png" alt="star">
                        <img src="assets/star-rate.png" alt="star">
                        <img src="assets/star-rate.png" alt="star">
                        <img src="assets/star-rate.png" alt="star">
                        <img src="assets/star-rate-0.png" alt="star">
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
