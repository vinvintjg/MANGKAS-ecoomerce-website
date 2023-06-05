<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/logo_navbar.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href={{asset('css/navbar.css')}}>
    <link rel="stylesheet" href={{asset('css/home.css')}}>
    <link rel="stylesheet" href={{asset('css/service.css')}}>
    <link rel="stylesheet" href={{asset('css/about.css')}}>
    <link rel="stylesheet" href={{asset('css/product.css')}}>
    <link rel="stylesheet" href={{asset('css/shop.css')}}>
    <link rel="stylesheet" href={{asset('css/member.css')}}>
    <title>HOME PAGE</title>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <div class="navbar">
        <div class="nav-logo">
            <img src="assets/logo_navbar.png" alt="logo">
        </div>
        <a class="hamburger" id="nav-icon">&#9776;</a>
        <div class="nav-font" id="nav-mobile">
            <a href="#"><li>HOME</li></a>
            <a href="#"><li>ABOUT</li></a>
            <a href="#"><li>PRODUCT</li></a>
            <a href="#"><li>SHOP</li></a>
            <a href="#"><li>FAQ</li></a>
            <a href="#"><li>CONTACT</li></a>
            <button><a href="#"><li class="navlog">LOGIN</li></a></button>
        </div>
        </div>
    </nav>
    {{-- Header Section --}}
    <header>
        <div class="hero">
            <div class="hero-font">
                <span class="">WELCOME TO MANGKAS</span>
                <h1>Look Sharp Feel Sharper <br>
                    With Our Cuts</h1>
                <button class=""><a href="#">MEMBERSHIP NOW</a></button>
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
                <p>Hair style is the way a person arranges their hair using various techniques and tools, such as scissors, combs, gel, or hair dye, to create their taste and lifestyle.</p>
            </div>
        </div>
        <div class="ser-card ser-card2">
            <div class="ser-logo">
                <img src="assets/ser-beard.png" alt="">
            </div>
            <div class="ser-title">
                <span>BEARD TRIM</span>
            </div>
            <div class="ser-font">
                <p>Bread trim is a technique used to remove the crust from bread by using a knife or a special tool called a bread trimmer, resulting in a clean andcappearance.</p>
            </div>
        </div>
        <div class="ser-card">
            <div class="ser-logo">
                <img src="assets/ser-spa.png" alt="">
            </div>
            <div class="ser-title">
                <span>HAIR SPA</span>
            </div>
            <div class="ser-font">
                <p>Hair grooming refers to the process of taking care of one's hair by using various techniques and products, such as shampoo, conditioner, hair oil.</p>
            </div>
        </div>
        <div class="ser-card ser-card2">
            <div class="ser-logo">
                <img src="assets/ser-color.png" alt="">
            </div>
            <div class="ser-title">
                <span>HAIR COLOR</span>
            </div>
            <div class="ser-font">
                <p>A hair color service can provide a range of benefits, such as enhancing one's natural features, covering up gray hair, and creating a new and exciting look.</p>
            </div>
        </div>
        </div>
    </head>

    <section>
        <div class="about">
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
                    Mangkas is a premier hair cutting service that provides online booking facilities for its customers. At Mangkas, we believe in providing the highest level of service and quality to our clients. With a team of highly trained and experienced barbers, we strive to give our customers the perfect cut every time. Our online booking system makes it easy for you to schedule your appointment at your convenience.
                </div>
            </div>
        </div>
    </section>

    <section class="swiper mySwiper">
        <div class="pro-head">
            <div class="pro-head-title">
                Product
            </div>
            <div class="pro-more">
                <button class=""><a href="#">See More...</a></button>
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
            <div class="pro-more">
                <button class=""><a href="#">See More...</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
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
                        <button class=""><a href="#">BOOKING</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="member">
        <div class="member-title">Membership</div>
        <div class="member-form">
            <form action="{{ route('createMembership') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-label" id="">Name</div>
                <div class="form-input" for="membership_name">
                    <input type="text" name="membership_name" placeholder="Fill Your Name">
                </div>
                <select name="membership_type" id="membership_type">
                    <option value="-1" name="membership_type">Choose...</option>
                    <option value="silver" name="membership_type">silver</option>
                    <option value="bronze" name="membership_type">bronze</option>
                    <option value="gold" name="membership_type">gold</option>
                    <option value="platinum" name="membership_type">platinum</option>
                </select>
                <div class="form-label" id="user_id">User Id</div>
                <div class="form-input" for="user_id">
                    <input type="text" name="user_id" placeholder="Fill Your User Id">
                </div>
                <div class="form-label" id="membership_phone">membership_phone</div>
                <div class="form-input" for="membership_phone">
                    <input type="text" name="membership_phone" placeholder="Fill Your Phone">
                </div>
                <div class="form-label" id="membership_email">membership_email</div>
                <div class="form-input" for="membership_email">
                    <input type="text" name="membership_email" placeholder="Fill Your Email">
                </div>
                <div class="button-form">
                    <button type="submit">Insert</button>
                </div>
            </form>
        </div>
    </section>




<br><br><br><br><br>

    <form action="{{ route('createMembership') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">membership_name</label>
        <input type="text" name="membership_name">
        <label for="">membership_type</label>
        <select name="membership_type" id="membership_type">
            <option value="-1" name="membership_type">Choose...</option>
            <option value="silver" name="membership_type">silver</option>
            <option value="bronze" name="membership_type">bronze</option>
            <option value="gold" name="membership_type">gold</option>
            <option value="platinum" name="membership_type">platinum</option>
        </select>
        <label for="">user_id</label>
        <input type="text" name="user_id">
        <label for="">membership_phone</label>
        <input type="text" name="membership_phone">
        <label for="">membership_email</label>
        <input type="text" name="membership_email">

        <button type="submit">Insert</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="{{url('js/navbar.js')}}"></script>
</body>
</html>
