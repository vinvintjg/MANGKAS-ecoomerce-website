@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Haircut Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-cut'></i>&nbsp;Haircut</div>
        <form action="{{ route('createHaircut') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="haircut_name" class="form-label">Haircut Name</label>
                <input type="text" class="form-input" name="haircut_name" value="{{ old('haircut_name') }}"
                    placeholder="Enter Your Facility Name">
                @error('haircut_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="haircut_logo" class="form-label">Haircut Logo</label>
                <input type="file" class="form-input-2 custom-file-input" name="haircut_logo"
                    value="{{ old('haircut_logo') }}" placeholder="Enter Your Facility Logo">
                @error('haircut_logo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="button-form button-width">
                <button type="submit">SUBMIT</button>
            </div>
        </form>

        <table class="table-container">
            <thead>
                <tr>
                    <th scope="col">Haircut Id</th>
                    <th scope="col">Haircut Name</th>
                    <th scope="col">Haircut Logo</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($haircuts as $haircut)
                    <tr>
                        <td scope="row">{{ $haircut->id }}</td>
                        <td>{{ $haircut->haircut_name }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $haircut->haircut_logo) }}" alt="Error"
                                style="height: 32px">
                        </td>
                        <td>
                            <form action="{{ route('deleteHaircut', ['id' => $haircut->id]) }}" method="post">
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
