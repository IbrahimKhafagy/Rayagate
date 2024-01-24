@extends('layouts.app') <!-- If you have a layout, extend it -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        @if($product)
            <ul>
                <li><strong>Name:</strong> {{ $product->name }}</li>
                <li><strong>Price:</strong> ${{ $product->price }}</li>
                <li><strong>Quantity:</strong> {{ $product->quantity }}</li>
                <li><strong>description:</strong> {{ $product->description }}</li>
                <li>
                    <strong>Categories:</strong>

                        @forelse($product->categories as $category)
                </li>
                <a href="{{route('categories.show', $category->id)}}">{{ $category->name }}</a> <li>
                        @empty
                            <li>No categories associated.</li>
                        @endforelse
                </li>

            </ul>
            <hr>
            <form method="POST" action="{{ route('products.destroy', ['id' => $product->id]) }}" onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @else
            <p>Product not found.</p>
        @endif
    </div>
@endsection
