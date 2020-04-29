@extends('layout')
@section('content')
<div class="category_name">
    <h2>Category : {{ $category->name }}</h2>
</div>
<div> <strong> Products list:</strong></div>
<d1iv>
    @if ($category->products->isEmpty())
        <span> {{"No Products has been added to ". $category->name ." category"  }} </span>
    @endif
    <ul>
        @foreach ($category->products as $product)
            <li> {{ $product->name }} </li>
            <p>{{ $product->description }}</p>
        @endforeach
    </ul>
</div>
@endsection
