@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Service Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-shower'></i>&nbsp;Service</div>
        <form action="{{ route('createService') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="service_name" class="form-label">Service Name</label>
                <input type="text" class="form-input" name="service_name" value="{{ old('service_name') }}"
                    placeholder="Enter Your Product Name">
                @error('service_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="service_price" class="form-label">Service Price</label>
                <input type="numeric" class="form-input" name="service_price" value="{{ old('service_price') }}"
                    placeholder="Enter Your Product Price">
                @error('service_price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="service_logo" class="form-label">Service Logo</label>
                <input type="file" class="form-input-2 custom-file-input" name="service_logo"
                    value="{{ old('service_logo') }}" placeholder="Enter Your Product Logo">
                @error('service_logo')
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
                    <th scope="col">Service id</th>
                    <th scope="col">Service name</th>
                    <th scope="col">Service logo</th>
                    <th scope="col">Service price</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td scope="row">{{ $service->id }}</td>
                        <td>{{ $service->service_name }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $service->service_logo) }}" alt="Error"
                                style="height: 32px">
                        </td>
                        <td>{{ $service->service_price }}</td>
                        <td>
                            <form action="{{ route('deleteService', ['id' => $service->id]) }}" method="post">
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
