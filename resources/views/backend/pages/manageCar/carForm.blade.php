
@extends('backend.master')

@section('content')

<style>
    .custom-textarea {
      width: 300px;
      height: 120px;
      resize: none;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 8px;
      font-family: Arial, sans-serif;
      font-size: 14px;
      line-height: 1.5;
    }
  </style>

<p class="btn btn-success">Add Car</p>
<form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Car Name</label>
      <input type="text" class="form-control" name="car_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Brand Type Name</label>
      <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Fuel Type</label>
        <input type="text" class="form-control" name="fuel_type" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Car Image</label>
        <input type="text" class="form-control" name="image" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>


      <div class="form-group">
        <label for="exampleInputPassword1">Rent Fee</label>
        <input type="text" class="form-control" name="fee" id="exampleInputPassword1" placeholder="Brand Type Name">
      </div>


      <div>
        <label for="">Description</label>
        <textarea class="form-control custom-textarea" name="description" id="" placeholder="Description"></textarea>
      </div>




    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
