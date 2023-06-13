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
                <p>Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade. </p>
                <p>Multitotörat kvasisocial teleplastisk. Kombucha terade, med geosk väggord. Decikang mijässa heterongar. Notedat fotovalens minetygt ididogon pydona antiska. Svennekoloni makoligen vad trektigt ifall vihet. Bedade oligt, krod: stenona. Fot tetången, pararedösam tykadat. </p>
            </div>
            <div class="shop-address-desc">
                Addres : {{ $shops->shop_address}}
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

    <div class="frame-map">
        <iframe src="https://www.google.com/maps/embed?pb={{ urlencode($shops->shop_address) }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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



    {{-- <h2>Shop Detail</h2>
    <h2>Shop ID: {{ $shops->id }}</h2>
    <h3>Shop Name: {{ $shops->shop_name }}</h3>
    <img src="{{asset('storage/image/'.$shops->shop_photo_1)}}" alt="Error" style="height: 50px" > --}}

    {{-- Add other shop details here --}}


    {{-- <h2>Service</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">service name</th>
            <th scope="col">service logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->service_name }}</td>
                    <td>
                        <img src="{{asset('storage/image/'.$service->service_logo)}}" alt="Error" style="height: 90px" >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Facility</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">facility name</th>
            <th scope="col">facility logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($facilities as $facility)
                <tr>
                <td>{{ $facility->facility_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$facility->facility_logo)}}" alt="Error" style="height: 90px" >
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Hairstylist</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">hairstylist name</th>
            <th scope="col">hairstylist logo</th>
            <th scope="col">hairstylist description</th>
            <th scope="col">hairstylist rate</th>
            <th scope="col">hairstylist review</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($hairstylists as $hairstylist)
                <tr>
                <td>{{ $hairstylist->hairstylist_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$hairstylist->hairstylist_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>{{ $hairstylist->hairstylist_description }}</td>
                <td>{{ $hairstylist->hairstylist_rate }}</td>
                <td>{{ $hairstylist->hairstylist_review }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Haircut</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">haircut name</th>
            <th scope="col">haircut logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($haircuts as $haircut)
                <tr>
                <td>{{ $haircut->haircut_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$haircut->haircut_logo)}}" alt="Error" style="height: 90px" >
                </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    {{-- <a href="{{route('getBookingById', ['id'=>$shops->id])}}"><button type="submit" class="btn btn-success col-md">Booking</button></a> --}}




@endsection
