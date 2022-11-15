@extends('backend.master');

@section('content')
    <div class="container">
        <h2 class="mb-5">Create a Category</h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <form action="{{ route('category.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mb-3" placeholder="Category Name" name="name">
            <input type="file" class="form-control mb-3" name="img">
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
