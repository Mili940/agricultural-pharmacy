@extends('layouts.app')

@section('content')
    <div class="my-10">
        <h1 class="h1">{{ $product->name }}</h1>
        <h1 class="h1">{{ $product->description }}</h1>
        <h1 class="h1">{{ $product->quantity }}</h1>
        <div class="btn-edit mt-4">
            <a class="flex justify-center" href="/products/{{ $product->id }}/edit">Edit</a>
        </div>
    </div>
@endsection
