@extends('layout')

@section('content')
<div class="add_new">
    <a href="{{ route('products.create') }}">
        <i class="fas fa-plus"></i> {{ "Add New Product" }}
    </a>
</div>
<table id="products" class="display" style="width:100%">
    <thead>
        <tr>
            <th> {{ 'Name' }}</th>
            <th> {{ 'Actions' }}</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
        <tr>
            <td>  {{ $product->name }}</td>

          <td>   <a href="{{ route('products.destroy' , $product->id) }}" data-method="delete" class="confirm-delete"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
@section('scripts')
<script>
    $(document).ready( function () {
        $('#products').DataTable();
   } );
</script>

@endsection

