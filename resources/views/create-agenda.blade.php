@extends('layouts.navbar-admin')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>

    <form action="{{ route('createAgenda') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">hairstylist</label>
        <select name="hairstylist_id" id="hairstylist_id">
            @foreach ($hairstylists as $hairstylist)
            <option value="<?= $hairstylist['id'] ?>" name="hairstylist_id"><?= $hairstylist['hairstylist_name'] ?></option>
            @endforeach
        </select>

        <label for="">date</label>
        <input type="date" name="date">
        <label for="">hour</label>
        <input type="time" name="hour">
        <label for="">status</label>
        <input type="text" name="status">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">agenda id</th>
            <th scope="col">hairstylist_id</th>
            <th scope="col">hairstylist_name</th>
            <th scope="col">agenda date</th>
            <th scope="col">agenda hour</th>
            <th scope="col">agenda status</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($agendas as $agenda)
                <tr>

                <th scope="row">{{ $agenda->id }}</th>
                <td>{{ $agenda->hairstylist_id }}</td>
                <td>{{ $agenda->hairstylist->hairstylist_name }}</td>
                <td>Rp. {{ $agenda->date }}</td>
                <td>{{ $agenda->hour }}</td>
                <td>{{ $agenda->status }}</td>
                <td>
                    <form action="{{route('deleteAgenda', ['id' => $agenda->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger col-md">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection
