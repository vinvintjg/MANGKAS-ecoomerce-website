@extends('layouts.navbar')
@section('content')

    <head>
        <title>FAQ</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap"
            rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href={{ asset('css/faq.css') }}>
        <link rel="stylesheet" href={{ asset('css/form.css') }}>
        <link rel="stylesheet" href="styles.css" />
    </head>

    <body>

        <div class="section-faq">
            <div class="big-title">FAQ</div>
            @foreach ($faqs as $faq)
                <div class="drop">
                    <div class="drop-item">
                        <button id="drop-button-1" aria-expanded="false">
                            <span class="drop-title">{{ $faq->faq_question }}</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="drop-content">
                            <p>
                                {{ $faq->faq_answer }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </body>



    </html>
@endsection
