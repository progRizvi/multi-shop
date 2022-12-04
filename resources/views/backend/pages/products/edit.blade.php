@extends('backend.master')

@section('backend.pages.products.edit')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="category_id" class="form-label">Category Name</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="product_price">
        </div>
        <div class="mb-3">
            <label for="product_img" class="form-label">Product Image</label>
            <input type="file" class="form-control" name="product_img[]" multiple>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
