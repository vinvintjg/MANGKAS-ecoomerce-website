@extends('layouts.navbar')
@section('content')

<head>
    <link rel="stylesheet" href={{asset('css/shop-detail.css')}}>
</head>
    <div class="section-shode-top">
        <div class="shode-display">
            <div class="shode-display-top">
                <img src="{{asset('storage/image/'.$shops->shop_photo_1)}}" alt="Error">
            </div>
            <div class="shode-display-bottom">
                <img src="{{asset('storage/image/'.$shops->shop_photo_2)}}" alt="Error">
                <img src="{{asset('storage/image/'.$shops->shop_photo_3)}}" alt="Error">
                <img src="{{asset('storage/image/'.$shops->shop_photo_4)}}" alt="Error">
            </div>
        </div>

        <div class="shode-desc">
            <div class="shode-name"> {{ $shops->shop_name }}</div>
            <div class="shode-rate">
                <div class="shode-rate-this">
                    <img src="{{asset('assets/star-rate.png')}}" alt="star">
                    <img src="{{asset('assets/star-rate.png')}}"alt="star">
                    <img src="{{asset('assets/star-rate.png')}}" alt="star">
                    <img src="{{asset('assets/star-rate.png')}}" alt="star">
                    <img src="{{asset('assets/star-rate-0-5.png')}}"alt="star">
                    {{ $shops->shop_rate }}
                </div>
                <div class="shode-loc-logo">
                    <img src="{{asset('assets/location-logo.png')}}" alt="Error">
                </div>
                <div class="shode-loc-name">
                    {{ $shops->shop_location }}
                </div>
            </div>
            <div class="shode-price">
                IDR {{ $shops->shop_price_low }} - {{ $shops->shop_price_high }}
            </div>
            <div class="shode-long-desc">
                <p>{{ $shops->shop_description }}</p>
            </div>
            <div class="shop-address-desc">
                Addres : <br>
                {{ $shops->shop_address}}
            </div>
            <div class="button-form">
                <button class=""><a href="{{route('getBookingById', ['id'=>$shops->id])}}">BOOK NOW</a></button>
            </div>


        </div>

    </div>

    <div class="section-shode-ser-fav">
        <div class="shode-ser">
            <div class="shode-title-ser-fav">
                Barbershop Services
            </div>
            <div class="shode-content-ser">
                @foreach ($services as $service)
                <div class="shode-content-ser-1">
                    <img src="{{asset('storage/image/'.$service->service_logo)}}" alt="">
                    <div class="content-ser-isi">
                        {{ $service->service_name }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="shode-fav">
            <div class="shode-title-ser-fav">
                Barbershop Facility
            </div>
            <div class="shode-content-ser">
                @foreach ($facilities as $facility)
                <div class="shode-content-ser-1">
                    <img src="{{asset('storage/image/'.$facility->facility_logo)}}" alt="">
                    <div class="content-ser-isi">
                        {{ $facility->facility_name }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section-hair">
        <div class="section-hair-title">
            Our Hairstylist
        </div>
        <div class="hair-content">
            @foreach ($hairstylists as $hairstylist)
            <div class="hair-card">
                <div class="hair-image">
                    <img src="{{asset('storage/image/'.$hairstylist->hairstylist_logo)}}" alt="">
                </div>
                <div class="hair-text">
                    {{ $hairstylist->hairstylist_name }}
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="section-hair">
        <div class="section-hair-title">
            Haircut Style
        </div>
        <div class="hair-content">
            @foreach ($haircuts as $haircut)
            <div class="hair-card">
                <div class="hair-image">
                    <img src="{{asset('storage/image/'.$haircut->haircut_logo)}}" alt="">
                </div>
                <div class="hair-text">
                    {{ $haircut->haircut_name }}
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
