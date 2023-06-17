@extends('backend.master')

@section('content')

<p class="btn btn-success">Car List</p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Car Image</th>
        <th scope="col">Car Name</th>
        <th scope="col">Rent Fee</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($cars as $item)


      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->image}}</td>
        <td>{{$item->car_name}}</td>
        <td>{{$item->fee}}</td>
        <td>{{$item->description}}</td>

        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-info">View</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
