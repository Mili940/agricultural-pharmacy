@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Kreiraj novi preparat</h1>
    <form method="POST" action="/products">
        @csrf
        <div class="w-1/3">
            <div class="flex justify-between items-center mb-3">
                <label for="name">Name</label>
                <input class="input" type="text" name="name" placeholder="Ime">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="description">Opis</label>
                <textarea name="description" cols="35" rows="10" placeholder="Opis preparata"></textarea>
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="quantity">Kolicina</label>
                <input class="input" type="number" name="quantity" placeholder="Kolicina">
            </div>
            <div class="my-8">
                <button class="btn-confirm" type="submit">Kreiraj novi preparat</button>
            </div>
        </div>
    </form>
@endsection
