@extends('layouts.app')

@section('content')
    <div>
        <a href="{{route('users.index')}}">Lista kupaca</a>
    </div>
    <div>
        <a href="{{route('users.create')}}">Kreiraj novog kupca</a>
    </div>
    <hr>
    <div>
        <a href="{{route('products.index')}}">Lista preparata</a>
    </div>
    <div>
        <a href="{{route('products.create')}}">Kreiraj novi preparat</a>
    </div>
    <hr>
    <div>
        <a href="{{route('orders.index')}}">Lista porudzbina</a>
    </div>
    <div>
        <a href="{{route('orders.create')}}">Kreiraj novu porudzbinu</a>
    </div>
    <hr>
@endsection
