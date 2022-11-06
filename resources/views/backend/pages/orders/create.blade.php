@extends('backend.master');

@section('content')
    <div class="container">
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer Id:</label>
                <input type="text" class="form-control" name="customer_id">
            </div>
            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price: </label>
                <input type="text" class="form-control" name="total_price">
            </div>
            <div class="mb-3">
                <label for="total_discount" class="form-label">Total Discount: </label>
                <input type="number" class="form-control" name="total_discount">
            </div>
            <div class="mb-3">
                <label for="total_vat" class="form-label">Total Vat: </label>
                <input type="number" class="form-control" name="total_vat">
            </div>
            <div class="mb-3">
                <label for="total_payble" class="form-label">Total Payable: </label>
                <input type="text" class="form-control" name="total_payable">
            </div>
            <div class="mb-3">
                <label for="seller_name" class="form-label">Seller Name: </label>
                <input type="text" class="form-control" name="seller_name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
