@extends('layouts.navbar')
@section('content')

<head>
    <link rel="stylesheet" href={{asset('css/product.css')}}>
</head>

<div class="mangkas-product">
    <div class="big-title">Product</div>

    <div class="mangkas-card">

    {{-- <div class="card">
        <div class="card_image">
            <img src="assets/product-1.png" alt="card image">
        </div>
        <br><br><br>
        <h2>Perfume</h2>
        <h3>IDR 85.000</h3>
        <div class="card_star">
            <img src="assets/star-rate.png" alt="star">
            <img src="assets/star-rate.png" alt="star">
            <img src="assets/star-rate.png" alt="star">
            <img src="assets/star-rate.png" alt="star">
            <img src="assets/star-rate-0.png" alt="star">
        </div>
    </div> --}}
    @foreach ($products as $product)
    <div class="card card-jarak">
        <div class="card_image">
            <img src="{{asset('storage/image/'.$product->product_logo)}}" alt="card image">
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

<footer class="footer">
    <div class="foot-top">
        <div class="foot-logo">
            <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
        </div>
        <div class="foot-text">
            <div class="foot-text-1">
                <a href="/mangkas-home"><div class="foot-text-text">HOME</div></a>
                <a href="/mangkas-shop"><div class="foot-text-text">SHOP</div></a>
                <a href="/mangkas-product"><div class="foot-text-text">PRODUCT</div></a>
            </div>
            <div class="foot-text-1">
                <a href="/mangkas-faq"><div class="foot-text-text">FAQ</div></a>
                <a href="/mangkas-chat"><div class="foot-text-text">LIVE CHAT</div></a>
                <a href="/mangkas-contact"><div class="foot-text-text">CONTACT</div></a>
            </div>
            <div class="foot-text-1">
                <a href="/login"><div class="foot-text-text">SIGN IN</div></a>
                <a href="/mangkas-home"><div class="foot-text-text">MEMBERSHIP</div></a>
            </div>
        </div>
        <div class="foot-media">
            <div class="foot-media-text">
                FOLLOW US ON:
            </div>
            <div class="foot-media-logo">
                <a href="https://www.facebook.com/"><img src="{{asset('assets/media-1.png')}}" alt="logo"></a>
                <a href="https://web.whatsapp.com/"><img src="{{asset('assets/media-2.png')}}" alt="logo"></a>
                <a href="https://www.instagram.com/"><img src="{{asset('assets/media-3.png')}}" alt="logo"></a>
                <a href="https://www.tiktok.com/"><img src="{{asset('assets/media-4.png')}}" alt="logo"></a>
                <a href="https://www.twitter.com/"><img src="{{asset('assets/media-5.png')}}" alt="logo"></a>
            </div>
        </div>
    </div>
    <div class="foot-bot">
        @2023 Mangkas.com by PT Mangkas | All right reserved.
    </div>
</footer>




@endsection
