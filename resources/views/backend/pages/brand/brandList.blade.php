@extends('backend.master')


@section('content')
<br><br><h4>Brand Table</h4>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Brand List</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($brands as $item)


        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->brand_name}}</td>
        <td>{{ $item->brand_type}}</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="{{ route('brand.view',$item->id) }}" class="btn btn-info">View</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>



@endsection
