@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Membership Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-id-card'></i>&nbsp;Membership</div>


        <table class="table-container">
            <thead>
                <tr>
                    <th scope="col">Membership name</th>
                    <th scope="col">Membership type</th>
                    <th scope="col">User id</th>
                    <th scope="col">Membership phone</th>
                    <th scope="col">Membership email</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberships as $membership)
                    <tr>
                        <td scope="row">{{ $membership->membership_name }}</td>
                        <td>{{ $membership->membership_type }}</td>
                        <td>{{ $membership->user_id }}</td>
                        <td>{{ $membership->membership_phone }}</td>
                        <td>{{ $membership->membership_email }}</td>
                        <td>
                            <form action="{{ route('deleteMembership', ['id' => $membership->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete"><i
                                        class='bx bxs-trash bx-tada-hover bx-flip-horizontal'
                                        style='color:#ff0000;font-size: 20px;'></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
