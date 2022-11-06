@extends('backend.master')

@section('content')
    <h1>Orders</h1>
    {{-- @dd($orders) --}}
    <a href="{{ route('order.create') }}" class="btn btn-outline-primary">New Order</a>
    <div class="overflow-scroll">
        <table class="table table-responsive" style="width:100% !important;">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Customer Id</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Total Discount</th>
                    <th scope="col">Total Vat</th>
                    <th scope="col">Total Payable</th>
                    <th scope="col">Seller Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->customer_id }}</td>
                        <td>{{ $data->total_price }}</td>
                        <td>{{ $data->total_discount }}</td>
                        <td>{{ $data->total_vat }}</td>
                        <td>{{ $data->total_payable }}</td>
                        <td>{{ $data->seller_name }}</td>
                        <td>
                            <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
