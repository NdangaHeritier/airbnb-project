@extends('layout')
@section('content')

<table class="table table-striped">
    <thead class="bg-danger text-white fw-bold">
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>action</th>
    </thead>
    <tr>
        <td>{{$data->fullname}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->email}}</td>
        <td>
            <a href="logout" class="btn btn-danger">logout</a>
        </td>
    </tr>
</table>

@endsection