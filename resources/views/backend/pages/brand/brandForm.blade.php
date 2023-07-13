
@extends('backend.master')

@section('content')


<style>
    .container {
        max-width: 1000px; /* Adjust the width as desired */
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="container">
    <h3>Add Brand Form</h3>
    <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="exampleInputName" placeholder="Enter Brand Name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Brand Type Name</label>
            <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Brand Type Name">
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

