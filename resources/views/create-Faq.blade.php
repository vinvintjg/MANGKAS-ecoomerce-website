<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('createFaq') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">FAQ Answer</label>
        <input type="text" name="faq_answer">
        <label for="">FAQ Question</label>
        <input type="text" name="faq_question">

        <button type="submit">Insert</button>
    </form>

    <table class="table">
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

                <th scope="row">{{ $faq->id }}</th>
                <td>{{ $faq->faq_answer }}</td>
                <td>{{ $faq->faq_question }}</td>
                <td>
                    <form action="{{route('deleteFaq', ['id' => $faq->id])}}" method="post">
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
