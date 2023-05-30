<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Page</title>
</head>
<body>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">shop name</th>
            <th scope="col">shop_photo_1</th>
            <th scope="col">shop_rate</th>
            <th scope="col">shop_location</th>
            <th scope="col">low - high</th>
            <th scope="col">booking</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->shop_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$shop->shop_photo_1)}}" alt="Error" style="height: 50px" >
                </td>
                <td>{{ $shop->shop_rate }}</td>
                <td>{{ $shop->shop_location }}</td>
                <td>{{ $shop->shop_price_low }} - {{ $shop->shop_price_high }} </td>
                <td>
                    <a href="{{route('getShopById', ['id'=>$shop->id])}}"><button type="submit" class="btn btn-success col-md">Booking</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
