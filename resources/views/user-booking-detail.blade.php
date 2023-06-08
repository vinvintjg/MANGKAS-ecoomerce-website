<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>

    @foreach ($bookings as $booking)
        <p>booking_id : {{ $booking->id }}</p>
        <h4>PROFIL</h4>
        <p>booking_name : {{ $booking->booking_name }}</p>
        <p>booking_phone : {{ $booking->booking_phone }}</p>
        <p>booking_gender : {{ $booking->booking_gender }}</p>
        {{-- <h4>SHOP</h4> --}}
        {{-- <p>shop_name : {{ $booking->shop->shop_name }}</p> --}}
        {{-- <p>shop_address : {{ $booking->shop->shop_address }}</p --}}
        <h4>DETAIL</h4>
        {{-- <p>booking_service : {{ $booking->booking_service }}</p> --}}
        <p>booking_haircut : {{ $booking->haircut->haircut_name }}</p>
        <p>date : {{ $booking->agenda->date }}</p>
        <p>hour : {{ $booking->agenda->hour }}</p>
        <p>booking_note : {{ $booking->booking_note }}</p>
        <h4>PAYEMNT</h4>
        <p>booking_payment_total : {{ $booking->booking_payment_total }}</p>
        <p>booking_payment_method : {{ $booking->booking_payment_method }}</p>
        <img height="100px" src="{{asset('storage/image/'.$booking->booking_payment_photo)}}" alt="">
        <p>
            <form action="{{route('deleteBooking', ['id' => $booking->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger col-md">Cancel</button>
            </form>
        </p>
        <br><br><br>
    </tr>
    @endforeach

</body>
</html>
