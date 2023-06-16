
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href={{asset('css/faq.css')}}>
</head>
  <body><!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="icon" href="Assets/Logo.png" type="image/png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/service.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href={{asset('css/navbar.css')}}>
        <title>HOME PAGE</title>
        <style>
            *{
                box-sizing: border-box;
                margin: 2rem;
            }
            *::before,
            *::after{
                box-sizing: border-box;
            }
            .Head{
                align-items: center;
                display: flex;
                color: #AB8856;
                /* background-color: #12110A; */
                justify-content: center;
            }
            body{
                background-color: #12110A;
                margin: 0;
                padding: 0;
                color: #AB8856;
                display: flex;
                min-height: 100vh;
            }
            .container{
                margin: 0;
                padding: 4rem;
                width: 48rem;
            }
            .accordion .accordion-item{
                border-bottom: 1px solid #AB8856;
            }
            .accordion .accordion-item button[aria-expanded='true']{
                border-bottom: 1px solid #AB8856;
            }
            .accordion button{
                position: relative;
                display: block;
                text-align: left;
                width: 100%;
                padding: 1em 0;
                color: #AB8856;
                font-size: 1.15rem;
                font-weight: 400;
                border: none;
                background: none;
                outline: none;
            }
            .accordion button:hover,
            .accordion button:focus{
                cursor: pointer;
                color: #AB8856;
            }
            .accordion button:hover::after,
            .accordion button:focus::after{
                cursor: pointer;
                color: #AB8856;
                border: 1px solid #AB8856;
            }
            .accordion button .accordion-title {
                padding:  1em 1.5em 1em 0;
            }
            .accordion button .icon{
                display: inline-block;
                position: absolute;
                top: 18px;
                width: 22px;
                right: 0;
                height: 22px;
                border: 1px solid;
                border-radius: 22px;
            }
            .accordion button .icon::before{
                display: block;
                position: absolute;
                content: '';
                top: 9px;
                left: 5px;
                width: 10px;
                height: 2px;
                background: currentColor;
            }
            .accordion button .icon::after{
                display: block;
                position: absolute;
                content: '';
                top: 5px;
                left: 9px;
                width: 2px;
                height: 10px;
                background: currentColor;
            }
            .accordion button[aria-expanded='true']{
                color: #AB8856;
            }
            .accordion button[aria-expanded='true'] .icon::after{
                width: 0;
            }
            .accordion button[aria-expanded='true'] + .accordion-content{
                opacity: 1;
                max-height: 9em;
                transition: all 200ms linear;
                will-change: opacity, max-height;
            }
            .accordion .accordion-content{
                opacity: 0;
                max-height: 0;
                overflow: hidden;
                transition: opacity 200ms linear, max-height 200ms linear;
                will-change: opacity, max-height;
            }
            .accordion .accordion-content p{
                font-size: 1rem;
                font-weight: 300;
                margin: 2em 0;
            }
            .myflex{
                background-color: #AB8856;
                color: white;
                display: flex;
                align-items: center;
                justify-content: left;
                width: 70%;
            }
            .faq{
                display: flex;
                align-items: center;
                flex-direction: column;

                justify-content: center;
            }
            footer{
                display: block;
            }
        </style>
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
                    <a href="/"><li>HOME</li></a>
                    <a href="#aboutscroll"><li>ABOUT</li></a>
                    <a href="{{ route('getProductsMangkas') }}"><li>PRODUCT</li></a>
                    <a href="{{ route('getCreateShop') }}"><li>SHOP</li></a>
                    {{-- <a href=""><li>FAQ</li></a>
                    <a href=""><li>CONTACT</li></a> --}}
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

            <div class="accordion">
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="Head">
                <h2>Frequently Asked Questions</h2>
                </div>
                <br>
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordian-title">What is Mangkas?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordian-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-6" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-7" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <button id="accordion-button-8" aria-expanded="false">
                            <span class="accordian-title">What is Mangkas?</span>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordian-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore repellendus consequatur mollitia, rerum harum ducimus non odio quod iure aperiam assumenda earum sequi neque odit distinctio, magni iusto inventore cumque, dignissimos illo. Ea dolores aspernatur explicabo ipsum eius dolorem tempore exercitationem corporis eos. Deserunt magni odit similique asperiores quisquam.</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </body>
    </>
    <script src="{{url('js/navbar.js')}}"></script>
</html>
