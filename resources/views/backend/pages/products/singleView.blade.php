@extends('backend.master')


@section('content')
    {{-- {{ $product['slug'] }} --}}


    <h4>Product Name: {{ $product['product_name'] }}</h4>
    <h4>Product Category: {{ $product->category->name }}</h4>
    <h4>Product Seller Name: {{ $product['seller_name'] }}</h4>
    <h4>Product Price: {{ $product['product_price'] }}</h4>
    <h4>Product In stock: {{ $product['in_stock'] }}</h4>
    <h4>Product Slug: {{ $product['slug'] }}</h4>
@endsection
