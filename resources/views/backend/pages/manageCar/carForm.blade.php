
@extends('backend.master')

@section('content')
<p class="btn btn-success">Add Brand</p>
<form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Car Name</label>
      <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Brand Type Name</label>
      <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Fuel Type</label>
        <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Car Image</label>
        <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>


      <div class="form-group">
        <label for="exampleInputPassword1">Rent Fee</label>
        <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>

      <textarea class="form-control" name="" id="" cols="30" rows="10">
        Description
      </textarea>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
