<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'string']
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        if(auth('web')->attempt($data)) {
            return redirect(route('home'));
        };
        
        return redirect(route('auth.showLoginForm'))->withErrors(['email' => 'Пользователь не найден']);
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function showProfile()
    {
        return view('auth.profile');
    }

    public function showEditForm()
    {
        return view('auth.edit');
    }

    public function update(Request $request){

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $data = $request->validate([
            'name' => ['string'],
            'email' => 'email|string|unique:users,email,' .$user->id,
            'password' => ['string', 'nullable'],
            'avatar' => ['nullable', 'mimes:jpg,jpeg,png', 'max:2048']
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')
            ->storeAs('avatars', Auth::id().'.'.$request->file('avatar')->getClientOriginalExtension(), 'public'); 
        }

        if ($data['name']) {
            $user->fill([
                'name' => $request->name
            ]);
        }
        if ($data['email']) {
            $user->fill([
                'email' => $request->email
            ]);
        }
        if ($avatarPath) {
            $user->fill([
                'avatar' => $avatarPath
            ]);
        }
        if ((boolean) $data['password']) {
            $user->fill([
                'password' => bcrypt($data['password'])
            ]);
        }

        

        $user->save();

        return redirect()->route('auth.showProfile');


    }
}