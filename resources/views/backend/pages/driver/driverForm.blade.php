
@extends('backend.master')

@section('content')
<h3 >Add Driver Form</h3><br>
<form action="" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputName">Driver Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="Name" placeholder="Enter Brand Name">

    </div><br>

    <div class="form-group" style="padding: 0 50px;">
        <label for="exampleInputName2">Driver About</label>
        <input type="text" class="form-control" name="driver_about" id="exampleInputName2" placeholder="Driver About" style="width: 700px; height: 100px;">
      </div><br>


      <div class="form-group">
        <label for="exampleInputPassword1">Driver Image</label>
        <input type="file" class="form-control" name="image" id="exampleInputPassword1">
      </div>
      <br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
