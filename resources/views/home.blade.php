@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $index => $row)
        <tr>
            <th scope="row">{{$index}}</th>
            <td>{{$row->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
