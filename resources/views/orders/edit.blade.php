@extends('layouts.app')

@section('content')
    <h1 class="h1 my-4">Izmeni porudzbinu</h1>
    <form method="POST" action="/orders/{{ $order->id }}">
        @method('PATCH')
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
                        <option value="{{ $user->id }}" @if($order->user_id === $user->id) selected @endif>{{$user->name}} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-3">
                <label for="note">Opis porudzbine:</label>
                <textarea class="textarea" name="note" cols="35" rows="3" placeholder="Kultura, provrisna, korovi">{{$order->note}}</textarea>
            </div>
            <input-product-edit :products="{{$products}}" :input-order="{{$order}}"></input-product-edit>

            <hr>

            <hr>
            <div class="flex justify-end">
                <div class="my-8">
                    <button class="btn-confirm ml-10" type="submit">Izmeni porudzbinu</button>
                </div>
            </div>
        </div>
    </form>
@endsection
