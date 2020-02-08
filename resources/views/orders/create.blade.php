@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Kreiraj novu porudzbinu</h1>
    <form method="POST" action="/orders">
        @csrf
        <div class="w-3/5">
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
            <div class="flex flex-col mb-3">
                <label for="price_order">Cena Porudzbine:</label>
                <input class="input" type="number" name="price_order" placeholder="Cena porudzbine RSD">
            </div>
            <!--<div class="flex justify-between items-center mb-8">
                <div class="flex flex-col">
                    <label for="name">Preparat:</label>
                    <select
                        class="input-select"
                        name="product"
                    >
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="quantity">Kolicina:</label>
                    <input class="input" type="number" name="quantity" placeholder="Kolicina">
                </div>
                <div class="flex flex-col">
                    <label for="price">Cena:</label>
                    <input class="input" type="number" name="price" placeholder="Cena RSD">
                </div>
            </div>-->
            <input-product id="{{$product->id}}" name="{{ $product->name }}"></input-product>

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
