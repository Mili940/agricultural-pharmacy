<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all()->sortBy('last_name');
//          $users = User::all()->where('id', '3');

        return view('users.index', compact('users'));

    }

    public function create()
    {

        return view('users.create');

    }

    public function show(User $user)
    {

        return view('users.show', compact('user'));

    }

    public function store()
    {

       // User::create(request(['name', 'last_name', 'phone', 'email', 'password']));

        $user = new User();

        $user->name = request('name');
        $user->last_name = request('last_name');
        $user->phone = request('phone');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();

        return redirect('users');

    }

    public function edit(User $user)
    {

        return view('users.edit', compact('user'));

    }

    public function update(User $user)
    {

        $user->update(\request(['name', 'last_name', 'phone', 'email', 'password']));

        return redirect('/users');

    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect('/users');

    }
}