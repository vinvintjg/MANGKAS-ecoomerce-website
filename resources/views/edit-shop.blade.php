@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Update Shop</title>
    </head>

    <div class="section-formulir-admin">
        <div class="big-title"><i class='bx bx-store-alt'></i>&nbsp;Shop</div>
        <form action="{{route('updateShop', ['id' => $shop->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-column">
                <label for="shop_name" class="form-label">Shop Name</label>
                <input type="text" value="{{$shop->shop_name}}" class="form-input" name="shop_name" value="{{ old('shop_name') }}"
                    placeholder="Enter Your Product Name">
                @error('shop_name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_1" class="form-label">Shop Photo 1</label>
                <input type="file" value="{{$shop->shop_photo_1}}" class="form-input-2 custom-file-input" name="shop_photo_1"
                    value="{{ old('shop_photo_1') }}" placeholder="Enter Your Shop Photo 1">
                @error('shop_photo_1')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_2" class="form-label">Shop Photo 2</label>
                <input type="file" value="{{$shop->shop_photo_2}}" class="form-input-2 custom-file-input" name="shop_photo_2"
                    value="{{ old('shop_photo_2') }}" placeholder="Enter Your Shop Photo 2">
                @error('shop_photo_2')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_3" class="form-label">Shop Photo 3</label>
                <input type="file" value="{{$shop->shop_photo_3}}" class="form-input-2 custom-file-input" name="shop_photo_3"
                    value="{{ old('shop_photo_3') }}" placeholder="Enter Your Shop Photo 3">
                @error('shop_photo_3')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_photo_4" class="form-label">Shop Photo 4</label>
                <input type="file" value="{{$shop->shop_photo_4}}" class="form-input-2 custom-file-input" name="shop_photo_4"
                    value="{{ old('shop_photo_4') }}" placeholder="Enter Your Shop Photo 4">
                @error('shop_photo_4')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_price_low" class="form-label">Shop Price Low</label>
                <input type="numeric" value="{{$shop->shop_price_low}}" class="form-input" name="shop_price_low" value="{{ old('shop_price_low') }}"
                    placeholder="Enter Your Shop Price Low">
                @error('shop_price_low')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_price_high" class="form-label">Shop Price High</label>
                <input type="numeric" value="{{$shop->shop_price_high}}" class="form-input" name="shop_price_high" value="{{ old('shop_price_high') }}"
                    placeholder="Enter Your Shop Price High">
                @error('shop_price_high')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_rate" class="form-label">Shop Rate</label>
                <input type="numeric" value="{{$shop->shop_rate}}" class="form-input" name="shop_rate" value="{{ old('shop_rate') }}"
                    placeholder="Enter Your Shop Rate">
                @error('shop_rate')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_location" class="form-label">Shop Location</label>
                <input type="text" value="{{$shop->shop_location}}" class="form-input" name="shop_location" value="{{ old('shop_location') }}"
                    placeholder="Enter Your Shop Location">
                @error('shop_location')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_description" class="form-label">Shop Description</label>
                <textarea cols="80" value="{{$shop->shop_description}}" id="editor1" name="shop_description" rows="5">{{$shop->shop_description}}</textarea>
                @error('shop_description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="shop_address" class="form-label">Shop Address</label>
                <input type="text" value="{{$shop->shop_address}}" class="form-input" name="shop_address" value="{{ old('shop_address') }}"
                    placeholder="Enter Your Shop Address">
                @error('shop_address')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <input type="text" name="shopid" value="{{$shop->shopid}}">
            </div>

            <div class="button-form button-width">
                <button type="submit">SUBMIT</button>
            </div>

        </form>
    </div>
@endsection
