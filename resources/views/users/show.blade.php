@extends('layouts.app')

@section('content')
<div class="my-10">
    <h1 class="h1">{{ $user->name }} {{ $user->last_name }}</h1>
    <h1 class="h1">{{ $user->phone }}</h1>
    <h1 class="h1">{{ $user->email }}</h1>
    {{ $user->created_at }}
    <div class="btn-edit mt-4">
        <a class="flex justify-center" href="/users/{{ $user->id }}/edit">Edit</a>
    </div>
    <div class="my-10">
        <h1 class="h1">Lista porudzbina:</h1>
        @foreach($user->orders as $order)
            <a href="/orders/{{$order->id}}">
            <div class="flex {{ $order->payed ? 'payed-true' : '' }}">
                <div>
                    <p class="mr-4">Sifra porudzbine: {{ $order->id }}</p>
                </div>
                <div>
                    <p class="mr-4">Datuim i vreme kreiranja porudzbine: {{ $order->created_at }}</p>
                </div>
            </div>
            </a>
        @endforeach
    </div>
    <div>
        <a href="/users/{{$user->id}}/pdf" target="_blank">Priprema za stampu</a>
    </div>
    <div class="my-10">
        <h1 class="h1">Ukupno:</h1>
        <table>
            <thead>
            <tr>
                <th>Preparat</th>
                <th>Kolicina</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
