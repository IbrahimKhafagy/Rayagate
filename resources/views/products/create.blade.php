<!-- resources/views/products/create.blade.php -->
@extends('layouts.app') <!-- Assuming you have a layout file, adjust accordingly -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="container">
        <h2>Create New Product</h2>

        <form method="POST" action="{{ route('products.store') }}">
            @csrf <!-- CSRF token -->
        <div class="form-group">
            <label for="categories">Select Categories:</label>
            <select name="categories[]" id="categories" class="form-control">
                <!-- Loop through categories and populate the options -->
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
