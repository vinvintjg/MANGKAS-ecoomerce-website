@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Live Chat Page</title>
        <link rel="stylesheet" href={{asset('css/footer.css')}}?t={{ env('VERSION_TIME') }}>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-conversation'></i>&nbsp;Live Chat</div>
        <x-live-chat />



    </div>
@endsection
