@extends('backend.master')

@section('content')
    <h1>Discounts</h1>
    <a href="{{ route('discount.create') }}" class="btn btn-outline-primary">Create New</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Id</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Discount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discounts as $key => $discount)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $discount->product_name }}</td>
                    <td>{{ $discount->product_id }}</td>
                    <td>{{ $discount->product_price }}</td>
                    <td>{{ $discount->product_discount }}</td>
                    <td>
                        <a href="{{ route('discount.edit', ['id' => $discount->id]) }}" class="text-warning"><i
                                class="fas fa-pen"></i></a>
                        <a href="{{ route('discount.destroy', ['id' => $discount->id]) }}" class="text-danger px-2"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
