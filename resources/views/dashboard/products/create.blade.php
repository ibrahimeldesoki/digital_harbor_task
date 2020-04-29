@extends('layout')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
   <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
   </ul>
</div>
@endif
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
      <label for="name">Product Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name" name="name">
    </div>
    <div class="form-group">
        <label for="description">Product description</label>
        <textarea name="description" class="form-control"  rows="3"></textarea>
      </div>
      <div class="form-group">
        <label >Product Category</label>
        <select  class="form-control" name="category_id">
            <option disabled selected>{{ "Select category" }}</option>
        @foreach ($categories as $category)
             <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection

