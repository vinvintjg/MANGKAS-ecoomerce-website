@extends('layouts.navbar')
@section('content')

<head>
    <link rel="stylesheet" href={{asset('css/shop-detail.css')}}?t={{ env('VERSION_TIME') }}>
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
                {!! $shops->shop_description !!}
            </div>
            <div class="shop-address-desc">
                Address : <br>
                {{ $shops->shop_address}}
            </div>
            <div class="button-form login-btn">
                <button type="submit" onclick="window.location.href = '{{route('getBookingById', ['id'=>$shops->id])}}';">BOOK NOW</button>
            </div>
        </div>

    </div>

    <div class="section-shode-ser-fav">
        <div class="shode-ser-0">
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
            <div class="flip-card hair-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="hair-image">
                            <img src="{{asset('storage/image/'.$hairstylist->hairstylist_logo)}}" alt="">
                        </div>
                        <div class="hair-text">
                            {{ $hairstylist->hairstylist_name }}
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-back-top">
                            <div class="hair-text">
                                {{ $hairstylist->hairstylist_name }}
                            </div>
                            <div class="shode-long-desc">
                                {{ $hairstylist->hairstylist_description }}
                            </div>
                        </div>
                        <div class="flip-back-under">
                            <div class="flip-rate">
                                <div>
                                    <img src="{{asset('assets/star-rate.png')}}" alt="star" style="width: 20px;"> {{ $hairstylist->hairstylist_rate }}
                                </div>
                                <div>
                                    {{ $hairstylist->hairstylist_review }} Reviews
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="hair-image">
                            <img src="{{asset('storage/image/'.$haircut->haircut_logo)}}" alt="">
                        </div>
                        <div class="hair-text">
                            {{ $haircut->haircut_name }}
                        </div>
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>


@endsection
