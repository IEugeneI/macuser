@extends('layouts.app')


@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phones</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->surname}}</td>
            <td>
                @foreach($contact->phones as $phone)
                    {{$phone->phone}}
                @endforeach

            </td>
        </tr>
        </tbody>
    </table>
    <form action="/" method="GET">
        <input type="submit" class="btn btn-success" value="Back">
    </form>
@endsection
