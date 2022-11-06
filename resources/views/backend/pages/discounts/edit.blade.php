@extends('backend.master')



@section('content')
    <form action="{{ route('discount.update', ['id' => $discount->id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ $discount->product_name }}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label">Product Id</label>
            <input type="text" class="form-control" name="product_id" value="{{ $discount->product_id }}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="product_price" value="{{ $discount->product_price }}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Discount: %</label>
            <input type="number" class="form-control" name="product_discount" placeholder="%"
                value="{{ $discount->product_discount }}">
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
@endsection
