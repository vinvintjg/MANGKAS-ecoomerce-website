<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">membership_name</th>
            <th scope="col">membership_type</th>
            <th scope="col">user_id</th>
            <th scope="col">membership_phone</th>
            <th scope="col">membership_email</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($memberships as $membership)
                <tr>

                <th scope="row">{{ $membership->membership_name }}</th>
                <td>{{ $membership->membership_type }}</td>
                <td>{{ $membership->user_id }}</td>
                <td>{{ $membership->membership_phone }}</td>
                <td>{{ $membership->membership_email }}</td>
                <td>
                    <form action="{{route('deleteMembership', ['id' => $membership->id])}}" method="post">
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

