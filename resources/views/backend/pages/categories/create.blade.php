@extends('backend.master');

@section('content')
    <div class="container">
        <h2 class="mb-5">Create a Category</h2>
        <form action="{{ route('category.post') }}" method="POST">
            @csrf
            <input type="text" class="form-control mb-3" placeholder="Category Name" name="name">
            <textarea name="description" id="" cols="30" rows="3" class="form-control mb-3"
                placeholder="Description"></textarea>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inctive</option>
            </select>
            <input type="submit" value="Create" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
