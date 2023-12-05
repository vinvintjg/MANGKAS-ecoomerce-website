@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Shop Page</title>
    </head>

    <div class="section-formulir-admin">
        <div class="big-title"><i class='bx bx-store-alt'></i>&nbsp;Shop</div>

        <table class="table-container">
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
                        <td scope="row">{{ $shop->id }}</td>
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
                                <button type="submit" class="btn-delete"><i
                                        class='bx bxs-trash bx-tada-hover bx-flip-horizontal'
                                        style='color:#ff0000;font-size: 20px;'></i></button>
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

    </div>
@endsection
