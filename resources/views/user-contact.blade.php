@extends('layouts.navbar')
@section('content')

    <head>
        <title>Contact Us</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap"
            rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href={{ asset('css/faq.css') }}>
        <link rel="stylesheet" href={{ asset('css/form.css') }}>
        <link rel="stylesheet" href={{ asset('css/contact.css') }}>
        <link rel="stylesheet" href="styles.css" />
    </head>

        <div class="section-faq">
            <div class="big-title">Contact Us</div>
            <div class="faq-content">
            <div class="card-faq">
                <div class="faq-img">
                    <img src="{{asset('assets/contact-phone.png')}}" alt="logo">
                </div>
                <div class="faq-text-m">
                    By Phone
                </div>
                <div class="faq-text-s">
                    Call our customer care: <br>
                    +62 822 522 7222 65 <br>
                    Fax: <br>
                    650541423
                </div>
            </div>
            <div class="card-faq">
                <div class="faq-img">
                    <img src="{{asset('assets/contact-chat.png')}}" alt="logo">
                </div>
                <div class="faq-text-m">
                    By Phone
                </div>
                <div class="faq-text-s">
                    Chat with a member of our <br>
                    in-house team.
                </div>
            </div>
            <div class="card-faq">
                <div class="faq-img">
                    <img src="{{asset('assets/contact-mail.png')}}" alt="logo">
                </div>
                <div class="faq-text-m">
                    Gmail
                </div>
                <div class="faq-text-s">
                    Want to collaborate? <br>
                    We open exciting partnership <br>
                    opportunities for you! <br>
                    Contact us : <br>
                    mangkas@gmail.com
                </div>
            </div>
        </div>
        </div>

        <footer class="footer">
            <div class="foot-top">
                <div class="foot-logo">
                    <img src="{{ asset('assets/logo_navbar.png') }}" alt="logo">
                </div>
                <div class="foot-text">
                    <div class="foot-text-1">
                        <a href="/mangkas-home">
                            <div class="foot-text-text">HOME</div>
                        </a>
                        <a href="/mangkas-shop">
                            <div class="foot-text-text">SHOP</div>
                        </a>
                        <a href="/mangkas-product">
                            <div class="foot-text-text">PRODUCT</div>
                        </a>
                    </div>
                    <div class="foot-text-1">
                        <a href="/mangkas-faq">
                            <div class="foot-text-text">FAQ</div>
                        </a>
                        {{-- <a href="/mangkas-chat"> --}}
                            {{-- <div class="foot-text-text">LIVE CHAT</div> --}}
                        {{-- </a> --}}
                        <a href="/mangkas-contact">
                            <div class="foot-text-text">CONTACT</div>
                        </a>
                    </div>
                    <div class="foot-text-1">
                        <a href="/login">
                            <div class="foot-text-text">SIGN IN</div>
                        </a>
                        <a href="/mangkas-home">
                            <div class="foot-text-text">MEMBERSHIP</div>
                        </a>
                    </div>
                </div>
                <div class="foot-media">
                    <div class="foot-media-text">
                        FOLLOW US ON:
                    </div>
                    <div class="foot-media-logo">
                        <a href="https://www.facebook.com/"><img src="{{ asset('assets/media-1.png') }}" alt="logo"></a>
                        <a href="https://web.whatsapp.com/"><img src="{{ asset('assets/media-2.png') }}" alt="logo"></a>
                        <a href="https://www.instagram.com/"><img src="{{ asset('assets/media-3.png') }}" alt="logo"></a>
                        <a href="https://www.tiktok.com/"><img src="{{ asset('assets/media-4.png') }}" alt="logo"></a>
                        <a href="https://www.twitter.com/"><img src="{{ asset('assets/media-5.png') }}" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="foot-bot">
                @2023 Mangkas.com by PT Mangkas | All right reserved.
            </div>
        </footer>
@endsection
