@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Product Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-gift'></i>&nbsp;Product</div>
        <form action="{{ route('createProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-input" name="product_name" value="{{ old('product_name') }}"
                    placeholder="Enter Your Product Name">
                @error('product_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="product_price" class="form-label">Product Price</label>
                <input type="numeric" class="form-input" name="product_price" value="{{ old('product_price') }}"
                    placeholder="Enter Your Product Price">
                @error('product_price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="product_rate" class="form-label">Product Rate</label>
                <input type="numeric" class="form-input" name="product_rate" value="{{ old('product_rate') }}"
                    placeholder="Enter Your Product Rate">
                @error('product_rate')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="product_logo" class="form-label">Product Logo</label>
                <input type="file" class="form-input-2 custom-file-input" name="product_logo"
                    value="{{ old('product_logo') }}" placeholder="Enter Your Product Logo">
                @error('product_logo')
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
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Rate</th>
                    <th scope="col">Product Logo</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>Rp {{ $product->product_price }}</td>
                        <td>{{ $product->product_rate }}</td>
                        <td>
                            <img src="{{ asset('storage/image/' . $product->product_logo) }}" alt="Error"
                                style="height: 90px">
                        </td>
                        <td>
                            <form action="{{ route('deleteProduct', ['id' => $product->id]) }}" method="post">
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
