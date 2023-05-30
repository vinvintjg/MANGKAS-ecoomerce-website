<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{ route('createProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">product name</label>
        <input type="text" name="product_name">
        <label for="">product price</label>
        <input type="numeric" name="product_price">
        <label for="">product rate</label>
        <input type="numeric" name="product_rate">
        <label for="">product logo</label>
        <input type="file" name="product_logo">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">product id</th>
            <th scope="col">product name</th>
            <th scope="col">product price</th>
            <th scope="col">product rate</th>
            <th scope="col">product logo</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>

                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->product_name }}</td>
                <td>Rp. {{ $product->product_price }}</td>
                <td>{{ $product->product_rate }}</td>
                <td>
                    <img src="{{asset('storage/image/'.$product->product_logo)}}" alt="Error" style="height: 90px" >
                </td>
                <td>
                    <form action="{{route('deleteProduct', ['id' => $product->id])}}" method="post">
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
