<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Page</title>
    <script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
</head>

<body>

    <form action="{{ route('createShop') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">shop name</label>
        <input type="text" name="shop_name">
        <label for="">shop_photo_1</label>
        <input type="file" name="shop_photo_1">
        <label for="">shop_photo_2</label>
        <input type="file" name="shop_photo_2">
        <label for="">shop_photo_3</label>
        <input type="file" name="shop_photo_3">
        <label for="">shop_photo_4</label>
        <input type="file" name="shop_photo_4">
        <label for="">shop_price_low</label>
        <input type="number" name="shop_price_low">
        <label for="">shop_price_high</label>
        <input type="number" name="shop_price_high">
        <label for="">shop_rate</label>
        <input type="number" name="shop_rate" step="any">
        <label for="">shop location</label>
        <input type="text" name="shop_location">
        <label for="">shop_description</label>
        <textarea cols="80" id="editor1" name="shop_description" rows="5"></textarea>
        {{-- <input type="text" name="shop_description"> --}}
        <label for="">shop_address</label>
        <input type="text" name="shop_address">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">shop id</th>
                <th scope="col">shop name</th>
                <th scope="col">shop_photo_1</th>
                <th scope="col">shop_photo_2</th>
                <th scope="col">shop_photo_3</th>
                <th scope="col">shop_photo_4</th>
                <th scope="col">shop_price_low</th>
                <th scope="col">shop_price_high</th>
                <th scope="col">shop_rate</th>
                <th scope="col">shop_location</th>
                <th scope="col">shop_description</th>
                <th scope="col">shop_address</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr>
                    <th scope="row">{{ $shop->id }}</th>
                    <td>{{ $shop->shop_name }}</td>
                    <td>
                        <img src="{{ asset('storage/image/' . $shop->shop_photo_1) }}" alt="Error"
                            style="height: 50px">
                    </td>
                    <td>
                        <img src="{{ asset('storage/image/' . $shop->shop_photo_2) }}" alt="Emphty"
                            style="height: 50px">
                    </td>
                    <td>
                        <img src="{{ asset('storage/image/' . $shop->shop_photo_3) }}" alt="Emphty"
                            style="height: 50px">
                    </td>
                    <td>
                        <img src="{{ asset('storage/image/' . $shop->shop_photo_4) }}" alt="Emphty"
                            style="height: 50px">
                    </td>
                    <td>{{ $shop->shop_price_low }}</td>
                    <td>{{ $shop->shop_price_high }}</td>
                    <td>{{ $shop->shop_rate }}</td>
                    <td>{{ $shop->shop_location }}</td>
                    <td>{{ $shop->shop_description }}</td>
                    <td>{{ $shop->shop_address }}</td>
                    <td>
                        <form action="{{ route('deleteShop', ['id' => $shop->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger col-md">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        // Don't forget to add CSS for your custom styles.
        CKEDITOR.replace('editor1', {
            toolbar: [{
                    name: 'document',
                    items: ['Undo', 'Redo']
                },
                {
                    name: 'styles',
                    items: ['Format']
                },
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Strike', '-']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                }
            ],
            height: 200
        });
    </script>


</body>

</html>
