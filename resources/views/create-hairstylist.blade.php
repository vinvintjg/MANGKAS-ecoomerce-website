@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Hairstylist Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-user'></i>&nbsp;Hairstylist</div>
        <form action="{{ route('createHairstylist') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="hairstylist_name" class="form-label">Hairstylist Name</label>
                <input type="text" class="form-input" name="hairstylist_name" value="{{ old('hairstylist_name') }}"
                    placeholder="Enter Your Hairstylist Name">
                @error('hairstylist_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="hairstylist_logo" class="form-label">Hairstylist Logo</label>
                <input type="file" class="form-input-2 custom-file-input" name="hairstylist_logo"
                    value="{{ old('hairstylist_logo') }}" placeholder="Enter Your Hairstylist Logo">
                @error('hairstylist_logo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="hairstylist_description" class="form-label">Hairstylist Description</label>
                <input type="text" class="form-input" name="hairstylist_description"
                    value="{{ old('hairstylist_description') }}" placeholder="Enter Your Hairstylist Description">
                @error('hairstylist_description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="hairstylist_rate" class="form-label">Hairstylist Rate</label>
                <input type="number" class="form-input" name="hairstylist_rate" value="{{ old('hairstylist_rate') }}"
                    placeholder="Enter Your Hairstylist Rate">
                @error('hairstylist_rate')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="hairstylist_review" class="form-label">Hairstylist Review</label>
                <input type="text" class="form-input" name="hairstylist_review" value="{{ old('hairstylist_review') }}"
                    placeholder="Enter Your Hairstylist Review">
                @error('hairstylist_review')
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
                    <th scope="col">Hairstylist id</th>
                    <th scope="col">Hairstylist name</th>
                    <th scope="col">Hairstylist logo</th>
                    <th scope="col">Hairstylist description</th>
                    <th scope="col">Hairstylist rate</th>
                    <th scope="col">Hairstylist review</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hairstylists as $hairstylist)
                    <tr>
                        <td scope="row">{{ $hairstylist->id }}</td>
                        <td>{{ $hairstylist->hairstylist_name }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $hairstylist->hairstylist_logo) }}" alt="Error"
                                style="height: 90px">
                        </td>
                        <td>{{ $hairstylist->hairstylist_description }}</td>
                        <td>{{ $hairstylist->hairstylist_rate }}</td>
                        <td>{{ $hairstylist->hairstylist_review }}</td>
                        <td>
                            <form action="{{ route('deleteHairstylist', ['id' => $hairstylist->id]) }}" method="post">
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
