@extends('layouts.navbar-admin')
@section('content')

    <head>
        <title>Create Page</title>
    </head>

    <div class="section-formulir-admin">

        <div class="big-title"><i class='bx bx-calendar'></i>&nbsp;Agenda</div>
        <form action="{{ route('createAgenda') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <label for="hairstylist_id" class="form-label">Hairstylist</label>
                <div class="select-wrapper">
                    <select name="hairstylist_id" id="hairstylist_id" class="form-input">
                        @foreach ($hairstylists as $hairstylist)
                            <option value="<?= $hairstylist['id'] ?>" name="hairstylist_id">
                                <?= $hairstylist['hairstylist_name'] ?></option>
                        @endforeach
                    </select>
                    <span class="dropdown-icon" for="booking_gender">&#9660;</span>
                </div>
                @error('hairstylist_id')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-input" name="date" value="{{ old('date') }}"
                    placeholder="Enter Your Date">
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="hour" class="form-label">Hour</label>
                <input type="time" class="form-input" name="hour" value="{{ old('date') }}"
                    placeholder="Enter Your Hour">
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="status" class="form-label">Status</label>
                <div class="select-wrapper">
                    <select name="status" id="status" class="form-input">
                        <option value="Availabe" name="status">Availabe</option>
                        <option value="Unavailabe" name="status">Unavailabe</option>
                    </select>
                    <span class="dropdown-icon" for="booking_gender">&#9660;</span>
                </div>
                @error('status')
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
                    <th scope="col">Agenda_id</th>
                    <th scope="col">Hairstylist_id</th>
                    <th scope="col">Hairstylist_name</th>
                    <th scope="col">Agenda date</th>
                    <th scope="col">Agenda hour</th>
                    <th scope="col">Agenda status</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agendas as $agenda)
                    <tr>
                        <td scope="row">{{ $agenda->id }}</td>
                        <td>{{ $agenda->hairstylist_id }}</td>
                        <td>{{ $agenda->hairstylist->hairstylist_name }}</td>
                        <td>{{ $agenda->date }}</td>
                        <td>{{ $agenda->hour }}</td>
                        <td>{{ $agenda->status }}</td>
                        <td>
                            <form action="{{ route('deleteAgenda', ['id' => $agenda->id]) }}" method="post">
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
