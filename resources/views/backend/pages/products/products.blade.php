@extends('backend.master')

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Add Product</a>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category Name</th>
                @if (auth()->user()->role === 'admin')
                    <th scope="col">Seller Name</th>
                @endif
                <th scope="col">In Stock</th>
                <th scope="col">Product Price</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->category->name }}</td>
                    @if (auth()->user()->role === 'admin')
                        <td>{{ $product->user->user_name }} </td>
                    @endif
                    <td>{{ $product->in_stock }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>
                        <img src="{{ url('uploads/', $product->product_img[0]) }}" alt="">
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.single.view', ['id' => $product->id]) }}" class="text-primary"><i
                                class="fas fa-eye"></i></a>
                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="text-warning"><i
                                class="fas fa-pen"></i></a>
                        <a href="{{ route('products.destroy', ['id' => $product->id]) }}" class="text-danger"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
