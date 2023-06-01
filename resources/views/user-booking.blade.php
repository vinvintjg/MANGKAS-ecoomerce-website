<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{route('search1')}}" method="GET" class="input-group row">
        <label for="filter_date">Filter berdasarkan tanggal:</label>
        <input type="date" class="form-control" name="cari" id="filter_date" name="filter_date">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    
    <form action="{{ route('createBooking') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Personal</h2>
        <label for="booking_name">booking_name</label>
        <input type="text" name="booking_name">
        <label for="booking_phone">booking_phone</label>
        <input type="text" name="booking_phone">
        <label for="booking_gender">booking_gender</label>
        <select name="booking_id" id="booking_id">
            <option value="-1" name="booking_id">Choose...</option>
            <option value="boy" name="booking_id">male</option>
            <option value="female" name="booking_id">female</option>
        </select>

        <h2>Barbershop</h2>
        <label for="">Barbershop</label>
        <select name="shop_id" id="shop_id">
            <option value="<?= $shops['shop_id'] ?>" name="shop_id"><?= $shops['shop_name'] ?></option>
        </select>

        <label for="Service">Service</label>
        @foreach ($services as $service)
        <input type="checkbox" name="" value="<?= $service['service_id'] ?>">
        <label for="" >{{$service->service_name}}</label>
        @endforeach
        <input type="checkbox" name="Service">

        <h2>Services</h2>
        <label for="hairstylist_id">Hairstylist</label>
        <select name="hairstylist_id" id="hairstylist_id">
        @foreach ($hairstylists as $hairstylist)
            <option value="<?= $hairstylist['hairstylist_id'] ?>" name="hairstylist_id"><?= $hairstylist['hairstylist_name'] ?></option>
        @endforeach
        </select>

        <label for="booking_haircut">Haircut Style</label>
        <select name="booking_haircut" id="booking_haircut">
        @foreach ($haircuts as $haircut)
            <option value="<?= $haircut['id'] ?>" name="booking_haircut"><?= $haircut['haircut_name'] ?></option>
        @endforeach
        </select>

        <label for="booking_note">booking_note</label>
        <input type="text" name="booking_note">

        {{-- <form action="{{route('search1')}}" method="GET" class="input-group row">
            <label for="filter_date">Filter berdasarkan tanggal:</label>
            <input type="date" class="form-control" name="cari" id="filter_date" name="filter_date">
            <button type="submit" class="btn btn-primary">Search</button>
        </form> --}}

        @foreach ($agendas as $agenda)
            <tr>
                <th scope="row">{{ $agenda->id }}</th>
                <td>{{ $agenda->hairstylist_id }}</td>
                <td>{{ $agenda->hairstylist->hairstylist_name }}</td>
                <td>{{ $agenda->date }}</td>
                <td>{{ $agenda->hour }}</td>
                <td>{{ $agenda->status }}</td>
            </tr>
        @endforeach



        <h2>Payment</h2>
        <label for="booking_payment_total">Payment Detail</label>

        <label for="booking_payment_method">Transaction Method</label>
        <input type="text" name="booking_payment_method">

        <label for="booking_membership">Membership Type</label>
        <input type="text" name="booking_membership">

        <label for="booking_payment_photo">Upload Bukti Transaksi</label>
        <input type="file" name="booking_payment_photo">






        <button type="submit">Insert</button>
    </form>



</body>
</html>
