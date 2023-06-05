<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hairstylist Page</title>
</head>
<body>
    <form action="{{ route('createHairstylist') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">hairstylist name</label>
        <input type="text" name="hairstylist_name">
        <label for="">hairstylist logo</label>
        <input type="file" name="hairstylist_logo">
        <label for="">hairstylist description</label>
        <input type="text" name="hairstylist_description">
        <label for="">hairstylist rate</label>
        <input type="number" name="hairstylist_rate" step="any">
        <label for="">hairstylist review</label>
        <input type="text" name="hairstylist_review">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">hairstylist id</th>
            <th scope="col">hairstylist name</th>
            <th scope="col">hairstylist logo</th>
            <th scope="col">hairstylist description</th>
            <th scope="col">hairstylist rate</th>
            <th scope="col">hairstylist review</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($hairstylists as $hairstylist)
                <tr>

                <th scope="row">{{ $hairstylist->id }}</th>
                <td>{{ $hairstylist->hairstylist_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$hairstylist->hairstylist_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>{{ $hairstylist->hairstylist_description }}</td>
                <td>{{ $hairstylist->hairstylist_rate }}</td>
                <td>{{ $hairstylist->hairstylist_review }}</td>
                <td>
                    <form action="{{route('deleteHairstylist', ['id' => $hairstylist->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger col-md">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
