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
    <div>
        @foreach($user->orders as $order)
            <a href="/orders/{{$order->id}}">
            <div class="flex">
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
</div>
@endsection
