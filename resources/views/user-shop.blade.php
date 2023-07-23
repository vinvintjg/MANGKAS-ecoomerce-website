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
    <div class="shop-card-1 card card-jarak-1">
        <div class="shop-img">
            <img src="{{asset('storage/image/'.$shop->shop_photo_1)}}" alt="card image">
        </div>
        <div class="shop-text">
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
            <button class=""><a href="{{route('getShopById', ['id'=>$shop->id])}}">BOOKING</a></button>
            </div>
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
                {{-- <a href="/mangkas-chat"><div class="foot-text-text">LIVE CHAT</div></a> --}}
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


{{-- @extends('layouts.navbar')
@section('content')
<head>
    <title>Shop Page</title>
</head>
<body>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">shop name</th>
            <th scope="col">shop_photo_1</th>
            <th scope="col">shop_rate</th>
            <th scope="col">shop_location</th>
            <th scope="col">low - high</th>
            <th scope="col">booking</th>
        </tr>
        </thead>
        <tbody>
            <br><br><br>
            @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->shop_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$shop->shop_photo_1)}}" alt="Error" style="height: 50px" >
                </td>
                <td>{{ $shop->shop_rate }}</td>
                <td>{{ $shop->shop_location }}</td>
                <td>{{ $shop->shop_price_low }} - {{ $shop->shop_price_high }} </td>
                <td>
                    <a href="{{route('getShopById', ['id'=>$shop->id])}}"><button type="submit" class="btn btn-success col-md">Booking</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
@yield('content') --}}
