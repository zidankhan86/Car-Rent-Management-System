
@extends('backend.master')

@section('content')
<h3 >Add Brand Form</h3><br>
<form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputName">Brand Name</label>
      <input type="text" class="form-control" name="brand_name" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Brand Name">

    </div><br>
    <div class="form-group">
      <label for="exampleInputPassword1">Brand Type Name</label>
      <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
    </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
