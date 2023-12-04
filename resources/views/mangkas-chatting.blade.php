@extends('layouts.navbar')
@section('content')
    <!-- <form action="{{ route('createChatting') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @php
                $user = Auth::user();
            @endphp

            @if ($user && $user->role === 'admin')
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
    @if ($user && $user->role === 'admin')
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
        </table> -->

    <div class="card-live-chat">
        <div class="card-live-top">
            <div class="live-title">
                <div class="live-title-section">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                        <path d="M11 0.5L6 5.5L1 0.5" stroke="#F8F8F8" />
                    </svg>
                </div>
                <div class="live-title-section">
                    Chat with us !
                </div>
                <div class="live-title-section">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                        <path d="M0.8 8L0 7.2L3.2 4L0 0.8L0.8 0L4 3.2L7.2 0L8 0.8L4.8 4L8 7.2L7.2 8L4 4.8L0.8 8Z"
                            fill="#F8F8F8" />
                    </svg>
                </div>
            </div>
            <div class="live-profile">
                <div class="live-profile-logo">
                    <img src="{{ asset('assets/icon-admin.png') }}" alt="error">
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

            @foreach ($chattings->sortBy('created_at') as $chatting)
                @if ($chatting->sender == '1')
                    <div class="live-chat">
                        <div class="live-bubble">
                            <div class="live-bubble-time">
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

            @if ($user && $user->role === 'admin')
                <label for="chatting_text">TExt</label>
                <input type="text" name="chatting_text">

                <label for="receiver">Receiver</label>
                <input type="text" name="receiver">

                <button type="submit">send</button>

                <p>Saya admin</p>
            @else
                <div class="card-live-bottom">
                    <input type="text" name="chatting_text" class="live-input-place" placeholder="Your Message">
                    <input type="text" name="receiver" id="receiver" readonly value="1" style="display: none">

                    <button type="submit" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                            fill="none">
                            <path d="M0 13.1765V8.23529L6.73684 6.58824L0 4.94118V0L16 6.58824L0 13.1765Z" fill="#785F3C" />
                        </svg>
                    </button>

                </div>
            @endif
        </form>
    </div>
    <br><br><br><br><br><br><br><br>
@endsection
