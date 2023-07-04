<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user')->with('success', 'Your user has been created.');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        // update the user
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->update($attributes);

        return back()->with('success', 'User Updated!');
    }

    public function updatePassword(Request $request, User $user)
    {
        // ddd($request);

        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // User::create([
        //     'password' => Hash::make($request->password),
        // ]);

        // // update the user
        // $attributes = request()->validate([
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'User Password Updated!');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/user')->with('success', 'Your user has been deleted.');
    }
}
