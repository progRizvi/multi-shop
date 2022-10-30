@extends('backend.master')

@section('content')
    <h1>Category</h1>
    <a class="btn btn-primary mt-2" href="{{ route('category.create') }}"> <i class="fas fa-pen"></i> Create A Category</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Category Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Shirt</td>
                <td><a href="" class="text-warning"><i class="fas fa-pen"></i></a></td>
            </tr>
            <tr>
                <td>Jeans</td>
                <td><a href="" class="text-warning"><i class="fas fa-pen"></i></a></td>
            </tr>
            <tr>
                <td>Polo T-shirt</td>
                <td><a href="" class="text-warning"><i class="fas fa-pen"></i></a></td>
            </tr>
        </tbody>
    </table>
@endsection
