@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Edit user</h1>
    <form method="POST" action="/users/{{ $user->id }}">
        @method('PATCH')
        @csrf
        <div class="w-1/3">
            <div class="flex justify-between items-center mb-3">
                <label for="name">Name</label>
                <input class="input" type="text" name="name" placeholder="Ime" value="{{ $user->name }}">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="last_name">Prezime</label>
                <input class="input" type="text" name="last_name" placeholder="Prezime" value="{{ $user->last_name }}">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="phone">Telefon</label>
                <input class="input" type="tel" name="phone" placeholder="Telefon" value="{{ $user->phone }}">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="email">E-mail adresa</label>
                <input class="input" type="email" name="email" placeholder="e-mail" value="{{ $user->email }}">
            </div>
            <div class="flex justify-between items-center mb-3">
                <label for="password">Sifra</label>
                <input class="input" type="password">
            </div>
            <div class="my-8">
                <button class="btn-confirm" type="submit">Izmeni podatke o kupcu</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/users/{{ $user->id }}">
        @method('DELETE')
        @csrf
        <div>
            <button class="btn-delete" type="submit">Obrisi kupca</button>
        </div>
    </form>
@endsection
