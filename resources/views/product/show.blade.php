@extends('product.layout')

@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('product.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Name:</strong>
            {{$product->product_name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Code:</strong>
            {{$product->product_code}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{$product->details}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Image:</strong>
            <img width="20%" src="{{URL::to($product->logo)}}" alt="logo">
        </div>
    </div>

</div>

@endsection