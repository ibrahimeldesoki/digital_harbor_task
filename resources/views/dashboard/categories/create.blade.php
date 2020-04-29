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

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">
      <label for="name">Category Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

@endsection
