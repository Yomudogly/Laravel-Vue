@extends('product.layout')

@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel Product List</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('product.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif

<table class="table table-bordered">
    <tr>
        <th width="10%">Product Name</th>
        <th width="10%">Product Code</th>
        <th width="30%">Details</th>
        <th width="30%">Product Logo</th>
        <th width="20%">Action</th>

    </tr>
    @foreach($product as $item)
    <tr>
        <td>{{ $item->product_name }}</td>
        <td>{{ $item->product_code }}</td>
        <td>{{ str_limit($item->details, $limit = 70 ) }}</td>
        <td><img width="100%" src="{{URL::to($item->logo)}}" alt="logo"></td>
        <td><a class="btn btn-info" href="{{ URL::to('show/product/'.$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ URL::to('edit/product/'.$item->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ URL::to('delete/product/'.$item->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

{!! $product->links() !!}


@endsection