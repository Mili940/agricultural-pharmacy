@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Proizvodi</h1>
        <table>
            <thead>
            <tr>
                <th>Ime preparata</th>
                <th>Opis preparata</th>
                <th>Kolicina</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>
                            <a href="/products/{{$product->id}}">
                            {{ $product->name }}
                            </a>
                        </td>
                        <td>
                            {{ $product->description }}
                        </td>
                        <td>
                            {{ $product->quantity }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        <a href="{{route('products.create')}}">Kreiraj novi preparat</a>
    </div>

@endsection
