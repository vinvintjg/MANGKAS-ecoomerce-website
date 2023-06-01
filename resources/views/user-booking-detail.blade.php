<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">agenda_id</th>
            <th scope="col">user_id</th>
            <th scope="col">shop_id</th>
            <th scope="col">booking_name</th>
            <th scope="col">booking_phone</th>
            <th scope="col">booking_gender</th>
            <th scope="col">booking_haircut</th>
            <th scope="col">booking_note</th>
            <th scope="col">booking_payment_total</th>
            <th scope="col">booking_payment_method</th>
            <th scope="col">booking_payment_photo</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                <td>{{ $booking->agenda_id }}</td>
                <td>{{ $booking->user_id }}</td>
                <td>{{ $booking->shop_id }}</td>
                <td>{{ $booking->booking_name }}</td>
                <td>{{ $booking->booking_phone }}</td>
                <td>{{ $booking->booking_gender }}</td>
                <td>{{ $booking->booking_haircut }}</td>
                <td>{{ $booking->booking_note }}</td>
                <td>{{ $booking->booking_payment_total }}</td>
                <td>{{ $booking->booking_payment_method }}</td>
                <td>{{ $booking->booking_payment_photo }}</td>
                <td>
                    <form action="{{route('deleteBooking', ['id' => $booking->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger col-md">Cancel</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
