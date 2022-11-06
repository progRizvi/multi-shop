@extends('backend.master')


@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name">
        </div>
        <div class="mb-3">
            <label for="in_stock" class="form-label">In Stock</label>
            <input type="number" class="form-control" name="in_stock">
        </div>
        <div class="mb-3">
            <label for="seller_name" class="form-label">Seller Name</label>
            <input type="text" class="form-control" name="seller_name">
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="product_price">
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
