@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Porudzbina</h1>
    </div>
    <div>
        @foreach($orders as $order)
            <a href="/orders/{{$order->id}}">
                <div class="flex">
                    <p class="mr-2">ID porudzbine: {{ $order->id }}</p>
                    <p class="mr-2">Ime i prezime kupca: {{$order->user->name}} {{$order->user->last_name}}</p>
                    <p>Datum i vreme kreiranja porudzbine: {{ $order->created_at }}</p>
                </div>
            </a>
        @endforeach

    </div>
    <div class="mt-6">
        <a href="{{route('orders.create')}}">Kreiraj novu porudzbinu</a>
    </div>
@endsection
