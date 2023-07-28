<!-- tampilan besar -->
@if (Auth::check())
<div class="card-live-chat" id="card-live-chat-big" style="display: none;">
        <div class="card-live-top">
            <div class="live-title">
                <div class="live-title-section" id="small-view">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                    <path d="M11 0.5L6 5.5L1 0.5" stroke="#F8F8F8"/>
                    </svg>
                </div>
                <div class="live-title-section">
                    Chat with us !
                </div>
                <div class="live-title-section" id="close-button-1" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                    <path d="M0.8 8L0 7.2L3.2 4L0 0.8L0.8 0L4 3.2L7.2 0L8 0.8L4.8 4L8 7.2L7.2 8L4 4.8L0.8 8Z" fill="#F8F8F8"/>
                    </svg>
                </div>
            </div>
            <div class="live-profile">
                <div class="live-profile-logo">
                    <img src="{{asset('assets/icon-admin.png')}}" alt="error">
                </div>
                <div class="live-profile-title">
                    <div class="live-profile-title-top">
                    Admin
                    </div>
                    <div class="live-profile-title-bottom">
                    Customer Service
                    </div>
                </div>
            </div>
            <button class="scroll-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                <path d="M1 6L6 1L11 6" stroke="#F8F8F8"/>
            </svg>
            </button>
            @php
            $user = Auth::user();
            @endphp

            @foreach ($chattings->sortBy('created_at') as $chatting)
            @if ($chatting->sender == '1')
                <div class="live-chat">
                    <div class="live-bubble">
                        <div class="live-bubble-time">
                            @if($user && $user->role === 'admin')
                            For: {{ $chatting->receiver }}
                            @endif
                            {{ $chatting->created_at->addHours(7)->format('H:i') }}
                        </div>
                        <div class="live-bubble-text">
                            {{ $chatting->chatting_text }}
                        </div>
                    </div>
                </div>
            @else
                <div class="live-chat-2">
                    <div class="live-bubble-2">
                        <div class="live-bubble-text-2">
                            {{ $chatting->chatting_text }}
                        </div>
                        <div class="live-bubble-time-2">
                            @if($user && $user->role === 'admin')
                            From: {{ $chatting->sender }}
                            @endif
                            {{ $chatting->created_at->addHours(7)->format('H:i') }}
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            
        </div>
        <form action="{{ route('createChatting') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @php
            $user = Auth::user();
        @endphp

        @if($user && $user->role === 'admin')
        <div class="card-live-bottom">
            <input type="text" name="receiver" class="live-input-place" placeholder="Receiver Id">
            
        </div>
        <div class="card-live-bottom">
            <input type="text" name="chatting_text" class="live-input-place" placeholder="Your Message">
            <button type="submit" style="border: none; background: none; padding: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                    <path d="M0 13.1765V8.23529L6.73684 6.58824L0 4.94118V0L16 6.58824L0 13.1765Z" fill="#785F3C"/>
                </svg>
            </button>
        </div>
        @else
        <div class="card-live-bottom">
            <input type="text" name="chatting_text" class="live-input-place" placeholder="Your Message">
            <input type="text" name="receiver" id="receiver" readonly value="1" style="display: none">

            <button type="submit" style="border: none; background: none; padding: 0;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                <path d="M0 13.1765V8.23529L6.73684 6.58824L0 4.94118V0L16 6.58824L0 13.1765Z" fill="#785F3C"/>
            </svg>
            </button>
        </div>
        @endif
        </form>
    </div>

    <!-- tampilan kecil  -->
    <div class="live-title-1" id="card-live-chat-small" style="display: none;">
        <div class="live-title-section" id="large-view">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                <path d="M1 6L6 1L11 6" stroke="#F8F8F8"/>
            </svg>
        </div>
        <div class="live-title-section">Chat with us !</div>
        <div class="live-title-section" id="close-button" >
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                <path d="M0.8 8L0 7.2L3.2 4L0 0.8L0.8 0L4 3.2L7.2 0L8 0.8L4.8 4L8 7.2L7.2 8L4 4.8L0.8 8Z" fill="#F8F8F8"/>
            </svg>
        </div>
    </div>

    <div class="logo-live-chat" id="logo-live-chat">
        <svg xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134" fill="none">
        <g filter="url(#filter0_d_1474_209)">
            <circle cx="67" cy="67" r="35" fill="#AB8856"/>
            <path d="M83.6132 80.2119L78.5868 79.1675L77.8083 79.7274C76.0194 81.0112 73.9501 81.8476 71.7023 82.154C64.1944 83.1771 57.2376 77.7326 56.2878 70.7631C55.338 63.7935 60.5842 56.686 68.0921 55.6629C75.6 54.6397 82.5568 60.0842 83.5066 67.0538C83.8611 69.6547 83.3362 72.4147 82.0174 74.8929L81.3825 76.0833L83.6152 80.2092L83.6132 80.2119ZM85.6402 83.1C85.8554 83.1451 86.0773 83.1241 86.2797 83.0396C86.4821 82.9552 86.6565 82.8107 86.7823 82.6233C86.9081 82.4359 86.9801 82.2134 86.9898 81.9821C86.9994 81.7508 86.9463 81.5204 86.8367 81.318L84.0198 76.109C85.5493 73.2268 86.2101 69.938 85.7749 66.7446C84.6872 58.7636 76.8369 52.0182 67.7639 53.2546C58.691 54.491 52.9319 63.0911 54.0195 71.0722C55.1072 79.0532 62.9575 85.7987 72.0305 84.5622C74.5761 84.2231 77.0022 83.2574 79.1156 81.7422L85.6399 83.0976L85.6402 83.1Z" fill="white"/>
            <circle cx="63.4204" cy="64.216" r="17.1023" fill="#AB8856"/>
            <path d="M62.7874 65.9485C62.5314 65.9485 62.278 65.8981 62.0416 65.8002C61.8051 65.7022 61.5903 65.5587 61.4093 65.3777C61.2284 65.1967 61.0848 64.9819 60.9869 64.7454C60.8889 64.509 60.8385 64.2556 60.8385 63.9996C60.8385 63.7437 60.8889 63.4903 60.9869 63.2538C61.0848 63.0174 61.2284 62.8026 61.4093 62.6216C61.5903 62.4406 61.8051 62.2971 62.0416 62.1991C62.278 62.1012 62.5314 62.0508 62.7874 62.0508C63.3042 62.0508 63.7999 62.2561 64.1654 62.6216C64.5309 62.9871 64.7362 63.4828 64.7362 63.9996C64.7362 64.5165 64.5309 65.0122 64.1654 65.3777C63.7999 65.7432 63.3042 65.9485 62.7874 65.9485ZM70.0956 65.9485C69.8397 65.9485 69.5863 65.8981 69.3498 65.8002C69.1134 65.7022 68.8985 65.5587 68.7176 65.3777C68.5366 65.1967 68.393 64.9819 68.2951 64.7454C68.1972 64.509 68.1467 64.2556 68.1467 63.9996C68.1467 63.7437 68.1972 63.4903 68.2951 63.2538C68.393 63.0174 68.5366 62.8026 68.7176 62.6216C68.8985 62.4406 69.1134 62.2971 69.3498 62.1991C69.5863 62.1012 69.8397 62.0508 70.0956 62.0508C70.6125 62.0508 71.1082 62.2561 71.4737 62.6216C71.8392 62.9871 72.0445 63.4828 72.0445 63.9996C72.0445 64.5165 71.8392 65.0122 71.4737 65.3777C71.1082 65.7432 70.6125 65.9485 70.0956 65.9485ZM55.4791 65.9485C55.2232 65.9485 54.9698 65.8981 54.7333 65.8002C54.4969 65.7022 54.2821 65.5587 54.1011 65.3777C53.9201 65.1967 53.7766 64.9819 53.6786 64.7454C53.5807 64.509 53.5303 64.2556 53.5303 63.9996C53.5303 63.7437 53.5807 63.4903 53.6786 63.2538C53.7766 63.0174 53.9201 62.8026 54.1011 62.6216C54.2821 62.4406 54.4969 62.2971 54.7333 62.1991C54.9698 62.1012 55.2232 62.0508 55.4791 62.0508C55.996 62.0508 56.4917 62.2561 56.8572 62.6216C57.2227 62.9871 57.428 63.4828 57.428 63.9996C57.428 64.5165 57.2227 65.0122 56.8572 65.3777C56.4917 65.7432 55.996 65.9485 55.4791 65.9485Z" fill="white"/>
            <path d="M50.561 77.0416L55.4003 75.3281L56.2473 75.7778C58.193 76.8083 60.3563 77.3576 62.6248 77.3576C70.2019 77.3576 76.3597 71.0238 76.3597 63.99C76.3597 56.9562 70.2019 50.6224 62.6248 50.6224C55.0478 50.6224 48.89 56.9562 48.89 63.99C48.89 66.6149 49.7827 69.2787 51.4241 71.556L52.2138 72.6497L50.5588 77.0392L50.561 77.0416ZM48.9426 80.1769C48.7355 80.2506 48.5128 80.2598 48.3009 80.2034C48.0889 80.1471 47.8966 80.0275 47.7467 79.8588C47.5967 79.6901 47.4953 79.4794 47.4546 79.2515C47.4138 79.0237 47.4353 78.7881 47.5165 78.5728L49.6042 73.0313C47.6996 70.3821 46.6008 67.2128 46.6008 63.99C46.6008 55.9354 53.4683 48.1919 62.6248 48.1919C71.7814 48.1919 78.6488 55.9354 78.6488 63.99C78.6488 72.0446 71.7814 79.788 62.6248 79.788C60.0568 79.7957 57.5226 79.1665 55.224 77.9506L48.9426 80.1745V80.1769Z" fill="white"/>
        </g>
        </svg>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const logoLiveChat = document.getElementById('logo-live-chat');
        const cardLiveChatBig = document.getElementById('card-live-chat-big');
        const cardLiveChatSmall = document.getElementById('card-live-chat-small');
        const smallView = document.getElementById('small-view');
        const largeView = document.getElementById('large-view');
        const closeButton = document.getElementById('close-button');
        const closeButton1 = document.getElementById('close-button-1');


        logoLiveChat.addEventListener('click', function() {
            cardLiveChatBig.style.display = 'flex';
            logoLiveChat.style.display = 'none';
        });
        smallView.addEventListener('click', function() {
            cardLiveChatBig.style.display = 'none';
            cardLiveChatSmall.style.display = 'flex';
        });
        largeView.addEventListener('click', function() {
            cardLiveChatBig.style.display = 'flex';
            cardLiveChatSmall.style.display = 'none';
        });
        closeButton.addEventListener('click', function() {
            logoLiveChat.style.display = 'flex';
            cardLiveChatBig.style.display = 'none';
            cardLiveChatSmall.style.display = 'none';
        });
        closeButton1.addEventListener('click', function() {
            logoLiveChat.style.display = 'flex';
            cardLiveChatBig.style.display = 'none';
            cardLiveChatSmall.style.display = 'none';
        });

        });

        document.querySelector('.scroll-button').addEventListener('click', function() {
    document.querySelector('.card-live-top').scrollTop = 0; // Scroll to the top of the chat container
  });
@endif

    </script>