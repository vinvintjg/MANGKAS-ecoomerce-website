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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href={{asset('css/navbar.css')}}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{asset('css/member.css')}}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{asset('css/footer.css')}}?t={{ env('VERSION_TIME') }}>
    <title>Register Page</title>
    <link rel="stylesheet" href={{asset('css/relog.css')}}?t={{ env('VERSION_TIME') }}>
</head>
<body>

<nav>
    <div class="navbar">
    <div class="nav-logo">
        <img src="assets/logo_navbar.png" alt="logo">
    </div>
    <div class="hamburger" id="nav-icon">&#9776;</div>
    <div class="nav-font" id="nav-mobile">
        <a href="/"><li>HOME</li></a>
        <a href="/#aboutscroll"><li>ABOUT</li></a>
        <a href="{{ route('getProductsMangkas') }}"><li>PRODUCT</li></a>
        <a href="{{ route('getCreateShop') }}"><li>SHOP</li></a>
        <a href="{{ route('getFaqsMangkas') }}"><li>FAQ</li></a>
        <a href="{{ route('mangkas-contact') }}"><li>CONTACT</li></a>
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
                <button class="brown login-button"><a href="{{ route('login') }}">LOGIN</a></button>
            @endif
    </div>
    </div>
</nav>
<br><br><br><br>


<div class="relog">

    <div class="relog-photo">
        <img src="assets/relog-photo.png" alt="relog-photo">
    </div>
    <div class="relog-form">
    <div class="relog-title">Register</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="form-label" for="name" id="name">Name</div>
        <div class="form-input" for="name">
            <input type="text" name="name" placeholder="Fill Your Name">
        </div>
        <div :messages="$errors->get('name')" class="mt-2" />

        <!-- Email Address -->
        <div class="form-label" for="email" id="email">Email</div>
        <div class="form-input" for="email">
            <input type="text" name="email" placeholder="Fill Your Email">
        </div>
        <div :messages="$errors->get('email')" class="mt-2" />

        {{-- <div for="email" :value="__('Email')" />
        <div id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <div :messages="$errors->get('email')" class="mt-2" />
 --}}

        <!-- Phone Address -->
        <div class="form-label" for="phone" id="phone">Phone</div>
        <div class="form-input" for="phone">
            <input type="text" name="phone" placeholder="Fill Your Email">
        </div>
        <div :messages="$errors->get('phone')" class="mt-2" />

        {{-- <div for="phone" :value="__('Phone')" />
        <div id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
        <div :messages="$errors->get('phone')" class="mt-2" /> --}}

        <!-- Password -->
        <div class="form-label" for="password" id="password">Password</div>
        {{-- <div for="password" :value="__('Password')" /> --}}
        <div class="form-input" for="password">
            <input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" name="password" placeholder="Fill Your Password">
        </div>
{{--
        <div id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" /> --}}

        <div :messages="$errors->get('password')" class="mt-2" />


        <!-- Confirm Password -->
        <Password class="form-label" for="password_confirmation" id="password_confirmation">Password Confirmation</div>
        <div class="form-input" for="password_confirmation">
            <input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" name="password_confirmation" placeholder="Fill Your Password">
        </div>

        <div :messages="$errors->get('password_confirmation')" class="mt-2" />

        {{-- <div for="password_confirmation" :value="__('Confirm Password')" />

        <div id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

        <div :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}


        {{-- <div class="flex items-center justify-end mt-4"> --}}
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}
            <div class="relog-link">
            <div class="color-white small-title">
                Have an account already?
            </div>
            <div class="small-title">
                <a class="color-brown" href="{{ route('login') }}">Login now</a>
            </div>
            </div>
            {{-- <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button> --}}

            <div class="button-form">
                <button type="submit">Register</button>
            </div>
        {{-- </div> --}}
    </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="{{url('js/navbar.js')}}?t={{ env('VERSION_TIME') }}"></script>
</html>
