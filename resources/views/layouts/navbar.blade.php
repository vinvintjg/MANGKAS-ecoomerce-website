<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/icon-mangkas.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset('css/navbar.css')}}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{asset('css/member.css')}}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{asset('css/footer.css')}}?t={{ env('VERSION_TIME') }}>
</head>
<body>
    <x-live-chat />
    <nav>
        <div class="navbar">
        <div class="nav-logo">
            <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
        </div>
        <div class="hamburger" id="nav-icon">&#9776;</div>
        <div class="nav-font" id="nav-mobile">
            <a href="/"><li>HOME</li></a>
            <a href="/#aboutscroll"><li>ABOUT</li></a>
            <a href="{{ route('getProductsMangkas') }}"><li>PRODUCT</li></a>
            <a href="{{ route('getCreateShop') }}"><li>SHOP</li></a>
            <a href="{{ route('getFaqsMangkas') }}"><li>FAQ</li></a>
            <a href="{{ route('mangkas-contact') }}"><li>CONTACT</li></a>
            @auth
                @if (Auth::user()->role == 'staff')
                <a href="/create-agenda"><li>STAFF</li></a>
                @endif
                @if (Auth::user()->role == 'admin')
                <a href="/create-agenda"><li>ADMIN</li></a>
                @endif
            @endauth
            @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button :href="route('logout')" class="brown login-button"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('LOGOUT') }}
                </button>
            </form>
            @else
                <div class="login-btn">
                    <button type="submit" onclick="window.location.href = '{{ route('login') }}';">LOGIN</button>
                </div>
            @endif
        </div>
        </div>
    </nav>

    @yield('content')

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

</body>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="{{url('js/navbar.js')}}?t={{ env('VERSION_TIME') }}"></script>
</html>
