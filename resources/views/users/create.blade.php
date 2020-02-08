@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Kreiraj novog kupca</h1>
    <form method="POST" action="/users">
        @csrf
        <div class="w-1/3">
            <div class="flex justify-between items-center mb-3">
                <label for="name">Ime</label>
                <input class="input" type="text" name="name" placeholder="Ime">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="last_name">Prezime</label>
                <input class="input" type="text" name="last_name" placeholder="Prezime">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="phone">Telefon</label>
                <input class="input" type="tel" name="phone" placeholder="Telefon">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="email">E-mail adresa</label>
                <input class="input" type="email" name="email" placeholder="e-mail">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="password">Sifra</label>
                <input class="input" type="password">
            </div>
            <div class="my-8">
                <button class="btn-confirm" type="submit">Kreiraj novog kupca</button>
            </div>
        </div>
    </form>
@endsection
