@extends('backend.master')

@section('content')
    <h1>Feedbacks</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comments</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $key => $feedback)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $feedback->customer_name }}</td>
                    <td>{{ $feedback->customer_email }}</td>
                    <td>{{ $feedback->comments }}</td>
                    <td>
                        <a href="" class="text-primary"><i class="fas fa-eye"></i></a>
                        <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
