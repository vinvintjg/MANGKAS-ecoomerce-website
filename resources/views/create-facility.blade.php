<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{ route('createFacility') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Facility name</label>
        <input type="text" name="facility_name">
        <label for="">Facility logo</label>
        <input type="file" name="facility_logo">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">facility id</th>
            <th scope="col">facility name</th>
            <th scope="col">facility logo</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($facilities as $facility)
                <tr>

                <th scope="row">{{ $facility->id }}</th>
                <td>{{ $facility->facility_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$facility->facility_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>
                    <form action="{{route('deleteFacility', ['id' => $facility->id])}}" method="post">
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
