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
    <link rel="stylesheet" href={{asset('css/navbar.css')}}>
    <link rel="stylesheet" href={{asset('css/member.css')}}>
    <link rel="stylesheet" href={{asset('css/footer.css')}}>
</head>
<body>

    <nav>
        <div class="navbar">
        <div class="nav-logo">
            <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
        </div>
        <a class="hamburger" id="nav-icon">&#9776;</a>
        <div class="nav-font" id="nav-mobile">
            <a href="/"><li>HOME</li></a>
            <a href="/"><li>ABOUT</li></a>
            <a href="{{ route('getProductsMangkas') }}"><li>PRODUCT</li></a>
            <a href="{{ route('getCreateShop') }}"><li>SHOP</li></a>
            {{-- <a href="#"><li>FAQ</li></a>
            <a href="#"><li>CONTACT</li></a> --}}
            <button class="brown login-button"><a href="{{ route('login') }}">LOGIN</a></button>
        </div>
        </div>
    </nav>

    @yield('content')

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="{{url('js/navbar.js')}}"></script>
</html>