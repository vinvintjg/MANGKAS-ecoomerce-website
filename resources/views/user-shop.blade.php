@extends('layouts.navbar')
@section('content')

<head>
    <link rel="stylesheet" href={{asset('css/product.css')}}>
    <link rel="stylesheet" href={{asset('css/shop.css')}}>
</head>

<div class="mangkas-product">
    <div class="big-title">Shop</div>

    <div class="mangkas-card">

    @foreach ($shops as $shop)
    <div class="shop-card-1 card">
        <div class="shop-img">
            <img src="{{asset('storage/image/'.$shop->shop_photo_1)}}" alt="card image">
        </div>
        <div class="shop-text-2">
            <div class="shop-top-text">
                {{ $shop->shop_name }}
            </div>
            <div class="shop-mid-text">
                <div class="shop-rate">
                    <img src="assets/star-rate.png" alt="star">
                    {{ $shop->shop_rate }}
                </div>
                <div class="shop-location">
                    {{ $shop->shop_location }}
                </div>
            </div>
            <div class="shop-bot-text">
                <div class="shop-service">
                    @php
                        $count = 0;
                    @endphp

                    @foreach ($services as $service)
                        @if ($service->shop_id == $shop->shopid && $count < 3)
                            {{ $service->service_name }}
                            @if($count<2)&bull;@endif
                            @php
                                $count++;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="shop-button">
                <button onclick="window.location.href = '{{route('getShopById', ['id'=>$shop->id])}}';">BOOKING</button>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>



@endsection