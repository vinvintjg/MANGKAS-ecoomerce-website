@extends('layouts.navbar')
@section('content')

    <head>
        <title>Contact Us</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap"
            rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href={{ asset('css/faq.css') }}?t={{ env('VERSION_TIME') }}>
        <link rel="stylesheet" href={{ asset('css/form.css') }}?t={{ env('VERSION_TIME') }}>
        <link rel="stylesheet" href={{ asset('css/contact.css') }}?t={{ env('VERSION_TIME') }}>
        <link rel="stylesheet" href="styles.css" />
    </head>

    <div class="section-faq">
        <div class="big-title">Contact Us</div>
        <div class="faq-content">
            <div class="card-faq">
                <div class="faq-img">
                    <img src="{{ asset('assets/contact-phone.png') }}" alt="logo">
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
                    <img src="{{ asset('assets/contact-chat.png') }}" alt="logo">
                </div>
                <div class="faq-text-m">
                    Live Chat
                </div>
                <div class="faq-text-s">
                    Chat with a member of our <br>
                    in-house team.
                </div>
            </div>
            <div class="card-faq">
                <div class="faq-img">
                    <img src="{{ asset('assets/contact-mail.png') }}" alt="logo">
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
@endsection
