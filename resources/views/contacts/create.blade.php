@extends('layouts.app')


@section('content')
    <form action="/contacts" method="POST">
        @csrf
        <div class="form-group col-md">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Валера" required>
        </div>
        <div class="form-group col-md">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Иванов" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Next">
    </form>

@endsection
