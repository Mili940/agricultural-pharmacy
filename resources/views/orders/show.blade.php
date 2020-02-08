@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Porudzbina</h1>
    </div>
    <div>
        <p>ID porudzbine: {{ $order->id }}</p>
        <p>Opis prodzbine: {{$order->note}}</p>
        <p>Cena: {{$order->price_order}} RSD</p>
        <p>Placeno: {{$order->payed}}</p>
    </div>
    <div>
        @foreach($order->products as $product)
            <div>
                Ime preparata: {{ $product->name }}
                Kolicina: {{$product->pivot->quantity}}
                Cena preparata: {{$product->pivot->price}}
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        <a href="{{route('orders.create')}}">Kreiraj novu porudzbinu</a>
    </div>
@endsection
