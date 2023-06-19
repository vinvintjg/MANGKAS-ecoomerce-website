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
            <div class="drop">
                <div class="drop-item">
                    <button id="drop-button-1" aria-expanded="false">
                        <span class="drop-title">How to do the booking process?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
                <div class="drop-item">
                    <button id="drop-button-2" aria-expanded="false">
                        <span class="drop-title">How do I make a schedule change on an order?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
                <div class="drop-item">
                    <button id="drop-button-3" aria-expanded="false">
                        <span class="drop-title">What is the process for refunding funds if I cancel a booking?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
                <div class="drop-item">
                    <button id="drop-button-4" aria-expanded="false">
                        <span class="drop-title">How do I place an order for the product?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
                <div class="drop-item">
                    <button id="drop-button-5" aria-expanded="false">
                        <span class="drop-title">How do you register to become a pruning partner?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
                <div class="drop-item">
                    <button id="drop-button-5" aria-expanded="false">
                        <span class="drop-title">What are the requirements for registering as a pruning partner?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="drop-content">
                        <p>
                            Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis
                            diliga. Tinde tessa gening prende samt poll jyvin. Astroktiga ösi pretösa tös om nigt. Ässa
                            kroning megar. Kron giganade laligt. Ränade diangar, även om fåjengar, bemäsade dektig vigurade.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>

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

    </html>

    <script>
        const items = document.querySelectorAll('.drop button');

        function toggledrop() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach((item) => item.addEventListener('click', toggledrop));
    </script>
@endsection
