@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Kreiraj novu porudzbinu</h1>
    <form method="POST" action="/orders">
        @csrf
        <div class="w-8/12">
            <div class="flex flex-col mb-3">
                <label for="user_id">Ime i prezime kupca:</label>
                <select
                    name="user_id"
                    id="user_id"
                    class="input-select"
                >
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{$user->name}} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-3">
                <label for="note">Opis porudzbine:</label>
                <textarea class="textarea" name="note" cols="35" rows="3" placeholder="Kultura, provrisna, korovi"></textarea>
            </div>
            <input-product :products="{{$products}}"></input-product>

            <hr>

            <hr>
            <div class="flex justify-end">
                <div class="my-8">
                    <a href="{{route('orders.index')}}">
                        Cancel
                    </a>
                    <button class="btn-confirm ml-10" type="submit">Kreiraj novu porudzbinu</button>
                </div>
            </div>
        </div>
    </form>
@endsection
