@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h1 my-4">Kupci</h1>
        @foreach($users as $user)
            <li>
                <a href="/users/{{$user->id}}">
                    {{ $user->name }} {{ $user->last_name}}
                </a>
            </li>
        @endforeach
        <div class="mt-6">
            <a href="{{route('users.create')}}">Kreiraj novog kupca</a>
        </div>
    </div>
@endsection
