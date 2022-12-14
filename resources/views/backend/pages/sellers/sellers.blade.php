@extends('backend.master')

@section('content')
    <h1>Sellers</h1>
    <a href="{{ route('sellers.create') }}" class="btn btn-outline-primary">Add Seller</a>
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Seller Name</th>
                    <th scope="col">Seller Email</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($sellers->all()) --}}
                @foreach ($sellers as $key => $seller)
                    <tr>
                        {{-- @dd($seller->img) --}}
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $seller->first_name }} {{ $seller->last_name }}</td>
                        <td>{{ $seller->email }}</td>
                        <td><img src="{{ url('/uploads/sellers', $seller->img) }}" alt=""></td>
                        <td>
                            <a href="{{ route('seller.single', ['id' => $seller->id]) }}" class="text-primary px-2"> <i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('seller.edit', ['id' => $seller->id]) }}" class=" text-warning px-2"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('seller.deleteOne', ['id' => $seller->id]) }}" class="text-danger px-2"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $sellers->links() }} --}}
    </div>
@endsection
