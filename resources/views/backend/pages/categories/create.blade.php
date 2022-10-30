@extends('backend.master');

@section('content')
    <div class="container">
        <h2 class="mb-5">Create a Category</h2>
        <form action="/category">
            <input type="text" class="form-control" placeholder="Category Name">
            <input type="submit" value="Create" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
