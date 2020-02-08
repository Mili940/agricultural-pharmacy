@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Proizvodi</h1>
        @foreach ($products as $product)

            <li>
                <a href="/products/{{$product->id}}">
                    {{ $product->name }} {{ $product->description }} {{ $product->quantity }}
                </a>
            </li>

        @endforeach
    </div>
    <div class="mt-6">
        <a href="{{route('products.create')}}">Kreiraj novi preparat</a>
    </div>

@endsection
