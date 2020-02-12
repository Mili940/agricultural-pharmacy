@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Porudzbina</h1>
        <p class="mr-4">Datuim i vreme kreiranja porudzbine: {{ $order->created_at }}</p>
    </div>
    <div class="my-4">
        <p>ID porudzbine: {{ $order->id }}</p>
        <p>Opis prodzbine: {{$order->note}}</p>
    </div>
    <div>
        <table>
            <thead>
            <tr>
                <th>Ime preparata:</th>
                <th>Kolicina:</th>
                <th>Cena preparata: </th>
                <th>Ukupna cena preparata:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{$product->pivot->quantity}}</td>
                    <td>{{$product->pivot->price}}</td>
                    <td>{{$product->pivot->subtotal}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <div class="my-4">
            <p>Placeno: {{$order->payed}}</p>
            <p>Cena: {{$order->price_order}} RSD</p>
        </div>
    </div>
    <div class="mt-6">
        <a href="{{route('orders.create')}}">Kreiraj novu porudzbinu</a>
    </div>
@endsection
