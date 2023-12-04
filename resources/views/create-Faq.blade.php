@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>FAQ Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-help-circle'></i>&nbsp;FAQ</div>
        <form action="{{ route('createFaq') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="faq_answer" class="form-label">FAQ Answer</label>
                <input type="text" class="form-input" name="faq_answer" value="{{ old('faq_answer') }}"
                    placeholder="Enter Your Product Name">
                @error('faq_answer')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="faq_question" class="form-label">FAQ Question</label>
                <input type="text" class="form-input" name="faq_question" value="{{ old('faq_question') }}"
                    placeholder="Enter Your Product Price">
                @error('faq_question')
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
                    <th scope="col">FAQ id</th>
                    <th scope="col">FAQ qnswer</th>
                    <th scope="col">FAQ question</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td scope="row">{{ $faq->id }}</td>
                        <td>{{ $faq->faq_answer }}</td>
                        <td>{{ $faq->faq_question }}</td>
                        <td>
                            <form action="{{ route('deleteFaq', ['id' => $faq->id]) }}" method="post">
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
