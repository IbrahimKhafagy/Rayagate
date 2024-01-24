@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <h1>{{ $category->name }}</h1>

    <h2> Products:</h2>
    @foreach($category->products as $product)
        <p>{{ $product->name }}</p>
    @endforeach
@endsection
