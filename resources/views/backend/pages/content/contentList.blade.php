@extends('backend.master')


@section('content')

<br><br><a href="{{route('content.form')}}" class="btn btn-success">+ Add Content</a>
<br><h4>Content Table</h4>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Content Image</th>
        <th scope="col">Content Description</th>
        <th scope="col">Content Created</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($content as $item)


        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->image}}</td>
        <td>{{ $item->description}}</td>
        <td>{{ $item->created_at->diffForHumans()}}</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-info">View</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>



@endsection
