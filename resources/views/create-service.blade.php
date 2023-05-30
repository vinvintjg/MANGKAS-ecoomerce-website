<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{ route('createService') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">service name</label>
        <input type="text" name="service_name">
        <label for="">service logo</label>
        <input type="file" name="service_logo">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">service id</th>
            <th scope="col">service name</th>
            <th scope="col">service logo</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>

                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->service_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$service->service_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>
                    <form action="{{route('deleteService', ['id' => $service->id])}}" method="post">
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
