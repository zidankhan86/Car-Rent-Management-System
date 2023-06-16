
@extends('backend.master')

@section('content')
<p class="btn btn-success">Add Brand</p>
<form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Brand Name</label>
      <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Brand Type Name</label>
      <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
