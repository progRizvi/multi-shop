@extends('backend.master')

@section('content')
    <h1>Category</h1>

    <a class="btn btn-primary mt-2" href="{{ route('category.create') }}"> <i class="fas fa-pen"></i> Create A Category</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Category Img</th>
                <th scope="col">Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $key => $cat)
                <tr>
                    <td><img src="{{ url('/uploads/category/', $cat->img) }}" alt="{{ $cat->name }}">
                    </td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <a href="" class="text-primary px-2"><i class="fas fa-eye"></i></a>
                        <a href="" class="text-warning px-2"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('category.destroy', ['id' => $cat->id]) }}" class="text-danger px-2"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
