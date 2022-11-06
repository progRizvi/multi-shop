@extends('backend.master')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Add Product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">In Stock</th>
                <th scope="col">Product Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->in_stock }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="" class="text-primary"><i class="fas fa-eye"></i></a>
                        <a href="" class="text-warning"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('products.destroy', ['id' => $product->id]) }}" class="text-danger"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
