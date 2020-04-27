@extends('layouts.app')


@section('content')
    @if(isset($status))
        <div class="alert alert-info" role="alert">
            {{$status}}
        </div>
    @endif
    <form action="/contacts/create" method="GET">
        <input type="submit" class="btn btn-success" value="Create сontact">
    </form>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phones</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->surname}}</td>
                <td>
                    @foreach($contact->phones as $phone)
                        {{$phone->phone}}
                    @endforeach

                </td>
                <td>

                    <a href="{{ route('contacts.show',$contact->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <a href="/contact/info/{{$contact->id}}" class="btn btn-info">Info</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
