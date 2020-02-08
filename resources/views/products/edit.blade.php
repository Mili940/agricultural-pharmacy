@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Izmeni prozivod</h1>
    <form method="POST" action="/products/{{ $product->id }}">
        @method('PATCH')
        @csrf
        <div class="w-1/3">
            <div class="flex justify-between items-center mb-3">
                <label for="name">Name</label>
                <input class="input" type="text" name="name" placeholder="Ime" value="{{ $product->name }}">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="description">Opis</label>
                <textarea name="description" cols="35" rows="10" placeholder="Opis preparata">{{ $product->description }}</textarea>
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="quantity">Kolicina</label>
                <input class="input" type="number" name="quantity" placeholder="Kolicina" value="{{ $product->quantity }}">
            </div>
            <div class="my-8">
                <button class="btn-confirm" type="submit">Izmeni preparat</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/products/{{ $product->id }}">
        @method('DELETE')
        @csrf
        <div>
            <button class="btn-delete" type="submit">Obrisi preparat</button>
        </div>
    </form>
@endsection
