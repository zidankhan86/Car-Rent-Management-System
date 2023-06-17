
@extends('backend.master')

@section('content')
<br><br><h3 class="text-success">Content Form</h3><br>
<form action="{{ route('content.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Conent Image</label>
      <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Upload Date</label>
      <input type="date" class="form-control" name="upload_date" id="exampleInputPassword1" placeholder="Upload Date">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Description">
      </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
