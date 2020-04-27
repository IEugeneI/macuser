@extends('layouts.app')


@section('content')
    <form action="/phone/create" method="POST" id="form">
        @csrf
        <div class="form-group col-md">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="0955555555" required>
            <input type="hidden" class="form-control" id="id" name="id" value="{{$id}}">
        </div>

        <input type="button" class="btn btn-primary" value="Added" onclick="phonecreate(this)">
    </form>
    <form action="/" method="GET">
        <input type="submit" class="btn btn-primary" value="Back">
    </form>
@endsection
