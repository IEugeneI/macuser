@extends('layouts.app')


@section('content')

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group col-md">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Валера"
                   value="{{$contact->name}}" required>
        </div>
        <div class="form-group col-md">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Иванов"
                   value="{{$contact->surname}}" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
    <form action="/phone/create" method="POST" id="form">
        @csrf
        <div class="form-group col-md">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="0955555555" required>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$contact->id}}">
        </div>

        <input type="button" class="btn btn-primary" value="Added" onclick="phonecreate(this)">
    </form>
    <form action="/" method="GET">
        <input type="submit" class="btn btn-primary" value="Back">
    </form>
@endsection
