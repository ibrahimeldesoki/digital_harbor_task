@extends('layout')
@section('content')
<div class="add_new">
    <a href="{{ route('categories.create') }}">
        <i class="fas fa-plus"></i> {{ "Add New Category" }}
    </a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif

    <table id="categories" class="display" style="width:100%">
        <thead>
            <tr>
                <th> {{ 'Name' }}</th>
                <th> {{ 'Actions' }}</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>  <a href="{{ route('categories.show',$category->id) }}">   {{ $category->name }}</a></td>
                    <td>   <a href="{{ route('categories.destroy' , $category->id) }}" data-method="delete" class="confirm-delete"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
        @endforeach
        </tbody>
    </table>

@endsection
@section('scripts')
<script>
    $(document).ready( function () {
        $('#categories').DataTable();
   } );
</script>

@endsection


