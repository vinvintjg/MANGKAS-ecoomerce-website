<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{ route('createHaircut') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">haircut name</label>
        <input type="text" name="haircut_name">
        <label for="">haircut logo</label>
        <input type="file" name="haircut_logo">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">haircut id</th>
            <th scope="col">haircut name</th>
            <th scope="col">haircut logo</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($haircuts as $haircut)
                <tr>

                <th scope="row">{{ $haircut->id }}</th>
                <td>{{ $haircut->haircut_name }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$haircut->haircut_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>
                    <form action="{{route('deleteHaircut', ['id' => $haircut->id])}}" method="post">
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
