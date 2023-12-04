@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Booking Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-rss'></i>&nbsp;Booking</div>
        @foreach ($bookings as $booking)
            <table class="table-container">
                <thead>
                    <tr>
                        <th scope="col">Booking Id</th>
                        <th scope="col">Booking Name</th>
                        <th scope="col">Booking Phone</th>
                        <th scope="col">Booking Gender</th>
                        <th scope="col">Booking Shop Name</th>
                        <th scope="col">Booking Shop Address</th>
                        <th scope="col">Booking Haircut</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Booking Hour</th>
                        <th scope="col">Booking Note</th>
                        <th scope="col">Booking Payment Total</th>
                        <th scope="col">Booking Method</th>
                        <th scope="col">Booking Image</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">{{ $booking->id }}</td>
                        <td>{{ $booking->booking_name }}</td>
                        <td>{{ $booking->booking_phone }}</td>
                        <td>{{ $booking->booking_gender }}</td>
                        <td>{{ $booking->shop->shop_name }}</td>
                        <td>{{ $booking->shop->shop_address }}</td>
                        <td>{{ $booking->haircut->haircut_name }}</td>
                        <td>{{ $booking->agenda->date }}</td>
                        <td>{{ $booking->agenda->hour }}</td>
                        <td>{{ $booking->booking_note }}</td>
                        <td>{{ $booking->booking_payment_total }}</td>
                        <td>{{ $booking->booking_payment_method }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $booking->booking_payment_photo) }}" alt="Error"
                                style="height: 32px">
                        </td>
                        <td>
                            <form action="{{ route('deleteBooking', ['id' => $booking->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete"><i
                                        class='bx bxs-trash bx-tada-hover bx-flip-horizontal'
                                        style='color:#ff0000;font-size: 20px;'></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
