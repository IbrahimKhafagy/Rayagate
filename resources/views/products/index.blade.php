@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>All Products</h1>
            @if(session('success'))
            <div class="alert alert-success-custom">
                {{ session('success') }}
            </div>
            @endif
        <button class="btn btn-primary" onclick="window.location='{{ route('products.create') }}';">Create New Product</button>

        @if(count($products) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr onclick="window.location='{{ url('products', $product->id) }}';" style="cursor:pointer;">
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products available.</p>
        @endif
    </div>
@endsection
