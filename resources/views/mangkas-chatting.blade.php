<!-- resources/views/chat/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <h1>Chat</h1>

    <form action="{{ route('createChatting') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @php
            $user = Auth::user();
        @endphp

        @if($user && $user->role === 'admin')

            <label for="chatting_text">TExt</label>
            <input type="text" name="chatting_text">

            <label for="receiver">Receiver</label>
            <input type="text" name="receiver">

            <button type="submit">send</button>

            <p>Saya admin</p>
        @else

         <input type="text" name="chatting_text">

         <input type="text" name="receiver" id="receiver" readonly value="1" style="display: none">

         <button type="submit">send</button>

        @endif
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">user</th>
            <th scope="col">text</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($chattings as $chatting)
                @if($user && $user->role === 'admin')
                <tr>
                    <td>{{ $chatting->user->id }}</td>
                    <td>{{ $chatting->user->name }}</td>
                    <td>{{ $chatting->chatting_text }}</td>
                @else
                <tr>
                    <td>{{ $chatting->user->name }}</td>
                <td>{{ $chatting->chatting_text }}</td>

                @endif
            @endforeach
        </tbody>
    </table>


    <footer class="footer">
        <div class="foot-top">
            <div class="foot-logo">
                <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
            </div>
            <div class="foot-text">
                <div class="foot-text-1">
                    <a href="/mangkas-home"><div class="foot-text-text">HOME</div></a>
                    <a href="/mangkas-shop"><div class="foot-text-text">SHOP</div></a>
                    <a href="/mangkas-product"><div class="foot-text-text">PRODUCT</div></a>
                </div>
                <div class="foot-text-1">
                    <a href="/mangkas-faq"><div class="foot-text-text">FAQ</div></a>
                    <a href="/mangkas-chat"><div class="foot-text-text">LIVE CHAT</div></a>
                    <a href="/mangkas-contact"><div class="foot-text-text">CONTACT</div></a>
                </div>
                <div class="foot-text-1">
                    <a href="/login"><div class="foot-text-text">SIGN IN</div></a>
                    <a href="/mangkas-home"><div class="foot-text-text">MEMBERSHIP</div></a>
                </div>
            </div>
            <div class="foot-media">
                <div class="foot-media-text">
                    FOLLOW US ON:
                </div>
                <div class="foot-media-logo">
                    <a href="https://www.facebook.com/"><img src="{{asset('assets/media-1.png')}}" alt="logo"></a>
                    <a href="https://web.whatsapp.com/"><img src="{{asset('assets/media-2.png')}}" alt="logo"></a>
                    <a href="https://www.instagram.com/"><img src="{{asset('assets/media-3.png')}}" alt="logo"></a>
                    <a href="https://www.tiktok.com/"><img src="{{asset('assets/media-4.png')}}" alt="logo"></a>
                    <a href="https://www.twitter.com/"><img src="{{asset('assets/media-5.png')}}" alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="foot-bot">
            @2023 Mangkas.com by PT Mangkas | All right reserved.
        </div>
    </footer>
</body>
</html>
