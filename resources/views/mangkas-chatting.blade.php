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
</body>
</html>
