
@extends('backend.master')

@section('content')
<h3 >Add Driver Form</h3><br>

<div class="container">
<form action="{{ route('driver.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputName">Driver Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="Name" placeholder="BMW">

    </div><br>



      <div class="form-group">
        <label for="exampleInputPassword1">Driver Image</label>
        <input type="file" class="form-control" name="image" id="exampleInputPassword1">
      </div>
      <br>


      <div class="form-group" style="padding: 10 10px;">
        <label for="exampleInputName2">Driver About</label>
        <input type="text" class="form-control" name="about_driver" id="exampleInputName2" placeholder="Write about dirver here.." style="width: 700px; height: 100px;">
      </div><br>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
