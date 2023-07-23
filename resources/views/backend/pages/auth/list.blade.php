@extends('backend.master')


@section('content')
<br><br><h4>User Table</h4>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col"> Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($list as $item)


        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->phone}}</td>
        <td>{{ $item->address}}</td>

      </tr>

      @endforeach

    </tbody>
  </table>



@endsection
