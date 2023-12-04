@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Facility Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-rss'></i>&nbsp;Facility</div>
        <form action="{{ route('createFacility') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="facility_name" class="form-label">Facility Name</label>
                <input type="text" class="form-input" name="facility_name" value="{{ old('facility_name') }}"
                    placeholder="Enter Your Facility Name">
                @error('facility_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="facility_logo" class="form-label">Facility Logo</label>
                <input type="file" class="form-input-2 custom-file-input" name="facility_logo"
                    value="{{ old('facility_logo') }}" placeholder="Enter Your Facility Logo">
                @error('facility_logo')
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
                    <th scope="col">facility id</th>
                    <th scope="col">facility name</th>
                    <th scope="col">facility logo</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                    <tr>
                        <td scope="row">{{ $facility->id }}</td>
                        <td>{{ $facility->facility_name }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $facility->facility_logo) }}" alt="Error"
                                style="height: 32px">
                        </td>
                        <td>
                            <form action="{{ route('deleteFacility', ['id' => $facility->id]) }}" method="post">
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
