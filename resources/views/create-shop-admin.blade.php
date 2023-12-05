@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Shop Page</title>
    </head>

    <div class="section-formulir-admin">
        <div class="big-title"><i class='bx bx-store-alt'></i>&nbsp;Shop</div>
        <form action="{{ route('createShop') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="shop_name" class="form-label">Shop Name</label>
                <input type="text" class="form-input" name="shop_name" value="{{ old('shop_name') }}"
                    placeholder="Enter Your Product Name">
                @error('shop_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_1" class="form-label">Shop Photo 1</label>
                <input type="file" class="form-input-2 custom-file-input" name="shop_photo_1"
                    value="{{ old('shop_photo_1') }}" placeholder="Enter Your Shop Photo 1">
                @error('shop_photo_1')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_2" class="form-label">Shop Photo 2</label>
                <input type="file" class="form-input-2 custom-file-input" name="shop_photo_2"
                    value="{{ old('shop_photo_2') }}" placeholder="Enter Your Shop Photo 2">
                @error('shop_photo_2')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_3" class="form-label">Shop Photo 3</label>
                <input type="file" class="form-input-2 custom-file-input" name="shop_photo_3"
                    value="{{ old('shop_photo_3') }}" placeholder="Enter Your Shop Photo 3">
                @error('shop_photo_3')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_4" class="form-label">Shop Photo 4</label>
                <input type="file" class="form-input-2 custom-file-input" name="shop_photo_4"
                    value="{{ old('shop_photo_4') }}" placeholder="Enter Your Shop Photo 4">
                @error('shop_photo_4')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_price_low" class="form-label">Shop Price Low</label>
                <input type="numeric" class="form-input" name="shop_price_low" value="{{ old('shop_price_low') }}"
                    placeholder="Enter Your Shop Price Low">
                @error('shop_price_low')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_price_high" class="form-label">Shop Price High</label>
                <input type="numeric" class="form-input" name="shop_price_high" value="{{ old('shop_price_high') }}"
                    placeholder="Enter Your Shop Price High">
                @error('shop_price_high')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_rate" class="form-label">Shop Rate</label>
                <input type="numeric" class="form-input" name="shop_rate" value="{{ old('shop_rate') }}"
                    placeholder="Enter Your Shop Rate">
                @error('shop_rate')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_location" class="form-label">Shop Location</label>
                <input type="text" class="form-input" name="shop_location" value="{{ old('shop_location') }}"
                    placeholder="Enter Your Shop Location">
                @error('shop_location')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_description" class="form-label">Shop Description</label>
                <textarea cols="80" id="editor1" name="shop_description" rows="5"></textarea>
                @error('shop_description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_address" class="form-label">Shop Address</label>
                <input type="text" class="form-input" name="shop_address" value="{{ old('shop_address') }}"
                    placeholder="Enter Your Shop Address">
                @error('shop_address')
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
                    <th scope="col">edit</th>
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
                            <a href="{{route('getShopByIdAdmin', ['id'=>$shop->id])}}" >
                                <button type="submit" class="btn-delete">
                                    <i  class='bx bxs-pencil bx-tada-hover bx-flip-horizontal'
                                        style='color:orange;font-size: 20px;'></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('deleteShop', ['id' => $shop->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete"><i
                                        class='bx bxs-trash bx-tada-hover bx-flip-horizontal'
                                        style='color:red;font-size: 20px;'></i></button>
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
