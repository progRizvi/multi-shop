@extends('backend.master')

@section('content')
    <form action="{{ route('seller.update', ['id' => $seller->id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="">Seller Name: </label>
            <input type="text" class="form-control" placeholder="Seller Name" name="sellerName"
                value="{{ $seller->seller_name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="">Seller Email: </label>
            <input type="email" class="form-control" placeholder="Seller Email" name="sellerEmail"
                value="{{ $seller->seller_email }}">
        </div>
        <div class="mb-3">
            <label for="sellerPhone" class="">Seller Phone: </label>
            <input type="text" class="form-control" placeholder="Seller Phone" name="sellerPhone"
                value="{{ $seller->seller_number }}">
        </div>
        <div class="mb-3">
            <label for="address" class="">Seller Address: </label>
            <textarea name="sellerAddress" id="" cols="30" rows="3" class="form-control">{{ $seller->seller_address }}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="">Seller Image: </label>
            <input type="file" class="form-control" placeholder="Seller Image" name="sellerImg">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success ">Submit</button>
            <button type="reset" class="btn btn-outline-info ">Reset</button>
        </div>
    </form>
@endsection
