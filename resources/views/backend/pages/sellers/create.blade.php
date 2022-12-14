@extends('backend.master')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <form action="{{ route('sellers.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="">Seller Name: </label>
            <input type="text" class="form-control" placeholder="Seller Name" name="sellerName" required>
        </div>
        <div class="mb-3">
            <label for="email" class="">Seller Email: </label>
            <input type="email" class="form-control" placeholder="Seller Email" name="sellerEmail" required>
        </div>
        <div class="mb-3">
            <label for="sellerPhone" class="">Seller Phone: </label>
            <input type="text" class="form-control" placeholder="Seller Phone" name="sellerPhone" required>
        </div>
        <div class="mb-3">
            <label for="address" class="">Seller Address: </label>
            <textarea name="sellerAddress" id="" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="sellerImg" class="">Seller Image: </label>
            <input type="file" class="form-control" placeholder="Seller Image" name="sellerImg">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success ">Submit</button>
            <button type="reset" class="btn btn-outline-info ">Reset</button>
        </div>
    </form>
@endsection
