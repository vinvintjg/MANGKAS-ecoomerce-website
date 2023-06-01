<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Shop Detail</h1>
    <h2>Shop ID: {{ $shops->id }}</h2>
    <h3>Shop Name: {{ $shops->shop_name }}</h3>
    <img src="{{asset('storage/image/'.$shops->shop_photo_1)}}" alt="Error" style="height: 50px" >

    {{-- Add other shop details here --}}


    <h1>Service</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">service name</th>
            <th scope="col">service logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->service_name }}</td>
                    <td>
                        <img src="{{asset('storage/image/'.$service->service_logo)}}" alt="Error" style="height: 90px" >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Facility</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">facility name</th>
            <th scope="col">facility logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($facilities as $facility)
                <tr>
                <td>{{ $facility->facility_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$facility->facility_logo)}}" alt="Error" style="height: 90px" >
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Hairstylist</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">hairstylist name</th>
            <th scope="col">hairstylist logo</th>
            <th scope="col">hairstylist description</th>
            <th scope="col">hairstylist rate</th>
            <th scope="col">hairstylist review</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($hairstylists as $hairstylist)
                <tr>
                <td>{{ $hairstylist->hairstylist_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$hairstylist->hairstylist_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>{{ $hairstylist->hairstylist_description }}</td>
                <td>{{ $hairstylist->hairstylist_rate }}</td>
                <td>{{ $hairstylist->hairstylist_review }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Haircut</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">haircut name</th>
            <th scope="col">haircut logo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($haircuts as $haircut)
                <tr>
                <td>{{ $haircut->haircut_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$haircut->haircut_logo)}}" alt="Error" style="height: 90px" >
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('getBookingById', ['id'=>$shops->id])}}"><button type="submit" class="btn btn-success col-md">Booking</button></a>



</body>
</html>
