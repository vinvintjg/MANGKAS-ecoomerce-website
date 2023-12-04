<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="icon" href="assets/icon-mangkas.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href={{ asset('css/navbar.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/home.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/service.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/about.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/product.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/shop.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/member.css') }}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{ asset('css/footer.css') }}?t={{ env('VERSION_TIME') }}>
    <title>HOME PAGE</title>
</head>

<body>
    <x-live-chat />
    <!-- Navigation -->
    <nav>
        <div class="navbar">
            <div class="nav-logo">
                <img src="assets/logo_navbar.png" alt="logo">
            </div>
            <div class="hamburger" id="nav-icon">&#9776;</div>
            <div class="nav-font" id="nav-mobile">
                <a href="/">
                    <li>HOME</li>
                </a>
                <a href="/#aboutscroll">
                    <li>ABOUT</li>
                </a>
                <a href="{{ route('getProductsMangkas') }}">
                    <li>PRODUCT</li>
                </a>
                <a href="{{ route('getCreateShop') }}">
                    <li>SHOP</li>
                </a>
                <a href="{{ route('getFaqsMangkas') }}">
                    <li>FAQ</li>
                </a>
                <a href="{{ route('mangkas-contact') }}">
                    <li>CONTACT</li>
                </a>
                @auth
                    @if (Auth::user()->role == 'staff')
                        <a href="/create-agenda">
                            <li>STAFF</li>
                        </a>
                    @endif
                    @if (Auth::user()->role == 'admin')
                        <a href="/create-agenda">
                            <li>ADMIN</li>
                        </a>
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

    {{-- Header Section --}}
    <header>
        <div class="hero">
            <div class="hero-font">
                <span class="">WELCOME TO MANGKAS</span>
                <h1>Look Sharp Feel Sharper With Our Cuts</h1>
                @if (Auth::check())
                    <div class="member-btn">
                        <button type="submit" onclick="window.location.href = '#member-mangkas';">MEMBERSHIP
                            NOW</button>
                    </div>
                @else
                    <div class="member-btn">
                        <button type="submit" onclick="window.location.href = '/login';">MEMBERSHIP NOW</button>
                    </div>
                @endif
            </div>
        </div>
    </header>

    <!-- Products Section -->

    <head>
        <div class="head">
            <div class="ser-card">
                <div class="ser-logo">
                    <img src="assets/ser-style.png" alt="">
                </div>
                <div class="ser-title">
                    <span>HAIR STYLE</span>
                </div>
                <div class="ser-font">
                    <p>Hair style is the way a person arranges their hair using various techniques and tools, such as
                        scissors, combs, gel, or hair dye, to create their taste and lifestyle.</p>
                </div>
            </div>
            <div class="ser-card ser-card2 ser-card3">
                <div class="ser-logo">
                    <img src="assets/ser-beard.png" alt="">
                </div>
                <div class="ser-title">
                    <span>BEARD TRIM</span>
                </div>
                <div class="ser-font">
                    <p>Bread trim is a technique used to remove the crust from bread by using a knife or a special tool
                        called a bread trimmer, resulting in a clean andcappearance.</p>
                </div>
            </div>
            <div class="ser-card ser-card4">
                <div class="ser-logo">
                    <img src="assets/ser-spa.png" alt="">
                </div>
                <div class="ser-title">
                    <span>HAIR SPA</span>
                </div>
                <div class="ser-font">
                    <p>Hair grooming refers to the process of taking care of one's hair by using various techniques and
                        products, such as shampoo, conditioner, hair oil.</p>
                </div>
            </div>
            <div class="ser-card ser-card2 ser-card5">
                <div class="ser-logo">
                    <img src="assets/ser-color.png" alt="">
                </div>
                <div class="ser-title">
                    <span>HAIR COLOR</span>
                </div>
                <div class="ser-font">
                    <p>A hair color service can provide a range of benefits, such as enhancing one's natural features,
                        covering up gray hair, and creating a new and exciting look.</p>
                </div>
            </div>
        </div>
    </head>

    <section id="aboutscroll">
        <div class="about" id="about-scroll">
            <div class="abo-logo">
                <img src="assets/abo-people.png" alt="">
            </div>
            <div class="abo-text">
                <div class="abo-head">
                    <div class="abo-title1">About</div>
                    <div class="abo-title2">Us</div>
                    <div class="abo-icon">
                        <img src="assets/abo-scissor.png" alt="">
                    </div>
                </div>
                <div class="abo-mid">
                    Trimming your style, Sharpening your confidence
                </div>
                <div class="abo-bottom">
                    Mangkas is a premier hair cutting service that provides online booking facilities for its customers.
                    At Mangkas, we believe in providing the highest level of service and quality to our clients. With a
                    team of highly trained and experienced barbers, we strive to give our customers the perfect cut
                    every time. Our online booking system makes it easy for you to schedule your appointment at your
                    convenience.
                </div>
            </div>
        </div>
    </section>

    <section class="swiper mySwiper">
        <div class="pro-head">
            <div class="pro-head-title">
                Product
            </div>
            <div class="pro-more login-btn">
                <button type="submit" onclick="window.location.href = '{{ route('getProductsMangkas') }}';">See
                    More...</button>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-1.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Perfume</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate-0.png" alt="star">
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-3.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Hair Shampoo</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-2.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Styling Hairspray</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate-0-5.png" alt="star">
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-4.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Hair Styling</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate-0.png" alt="star">
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-5.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Face Wash</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="card_image">
                    <img src="assets/product-6.png" alt="card image">
                </div>
                <br><br><br>
                <h1>Hair Shampoo</h1>
                <div class="card_star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate.png" alt="star">
                    <img src="assets/star-rate-0-5.png" alt="star">
                </div>
            </div>
        </div>
    </section>

    {{-- SHOP --}}
    <section class="shop">
        <div class="pro-head">
            <div class="pro-head-title">
                Shop
            </div>
            <div class="pro-more login-btn">
                <button type="submit" onclick="window.location.href = '{{ route('getCreateShop') }}';">See
                    More...</button>
            </div>
        </div>
        <button class="pre-btn"><img src="assets/arrow-right.png" alt=""></button>
        <button class="nxt-btn"><img src="assets/arrow-right.png" alt=""></button>
        <div class="product-container">
            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-1.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Unique Barber
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button onclick="window.location.href = '{{ route('getCreateShop') }}';">BOOKING</button>
                        {{-- <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button> --}}
                    </div>
                </div>
            </div>

            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-2.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Classic Cuts
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button>
                    </div>
                </div>
            </div>
            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-3.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Unique Barber
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button>
                    </div>
                </div>
            </div>
            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-4.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Unique Barber
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button>
                    </div>
                </div>
            </div>
            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-5.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Unique Barber
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button>
                    </div>
                </div>
            </div>
            <div class="shop-card">
                <div class="shop-img">
                    <img src="assets/shop-6.png" alt="card image">
                </div>
                <div class="shop-text">
                    <div class="shop-top-text">
                        Unique Barber
                    </div>
                    <div class="shop-mid-text">
                        <div class="shop-rate">
                            <img src="assets/star-rate.png" alt="star">
                            4.5
                        </div>
                        <div class="shop-location">
                            Jakarta Barat
                        </div>
                    </div>
                    <div class="shop-bot-text">
                        <div class="shop-service">
                            Hair Style &bull; Beard Trim &bull; Hair Grooming
                        </div>
                    </div>
                    <div class="shop-button">
                        <button class=""><a href="{{ route('getCreateShop') }}">BOOKING</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (Auth::check())
        <section class="member" id="member-mangkas">
            <div class="member-title">Membership</div>
            <div class="member-form">
                <form action="{{ route('createMembership') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-label" id="">Name</div>
                    <div class="form-input" for="membership_name">
                        <input type="text" name="membership_name" placeholder="Fill Your Name"
                            value="{{ old('membership_name') }}">
                        @error('membership_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-label" id="">Membership Type</div>
                    <div class="select-wrapper">
                        <select name="membership_type" class="form-input" id="membership_type">
                            <option value="-1" name="membership_type" class="form-input" for="membership_type"
                                @if (old('membership_type') == -1) selected @endif>
                                Choose...</option>
                            <option value="silver" name="membership_type" class="form-input" for="membership_type"
                                @if (old('membership_type') == 'silver') selected @endif>
                                silver</option>
                            <option value="bronze" name="membership_type" class="form-input" for="membership_type"
                                @if (old('membership_type') == 'bronze') selected @endif>
                                bronze</option>
                            <option value="gold" name="membership_type" for="membership_type"
                                @if (old('membership_type') == 'gold') selected @endif>
                                gold</option>
                            <option value="platinum" name="membership_type" for="membership_type"
                                @if (old('membership_type') == 'platinum') selected @endif>
                                platinum</option>
                        </select>
                        <span class="dropdown-icon">&#9660;</span>

                    </div>
                    @error('membership_type')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-label" id="membership_phone">Phone</div>
                    <div class="form-input" for="membership_phone">
                        <input type="text" name="membership_phone" placeholder="Fill Your Phone"
                            value="{{ old('membership_phone') }}">
                        @error('membership_phone')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-label" id="membership_email">Email</div>
                    <div class="form-input" for="membership_email">
                        <input type="text" name="membership_email" placeholder="Fill Your Email"
                            value="{{ old('membership_email') }}">
                        @error('membership_email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button-form">
                        <button type="submit">Join Now</button>
                    </div>
                </form>
            </div>
        </section>
    @endif

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
                    <a href="https://www.facebook.com/"><img src="{{ asset('assets/media-1.png') }}"
                            alt="logo"></a>
                    <a href="https://web.whatsapp.com/"><img src="{{ asset('assets/media-2.png') }}"
                            alt="logo"></a>
                    <a href="https://www.instagram.com/"><img src="{{ asset('assets/media-3.png') }}"
                            alt="logo"></a>
                    <a href="https://www.tiktok.com/"><img src="{{ asset('assets/media-4.png') }}"
                            alt="logo"></a>
                    <a href="https://www.twitter.com/"><img src="{{ asset('assets/media-5.png') }}"
                            alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="foot-bot">
            @2023 Mangkas.com by PT Mangkas | All right reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="{{ url('js/navbar.js') }}?t={{ env('VERSION_TIME') }}"></script>

</body>

</html>
