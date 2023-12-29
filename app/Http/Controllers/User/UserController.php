<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user',
            'telp' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = UserModel::create([
            'name' => $request->name,
            'telp' => $request->telp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);

        // $user = UserModel::where('email', $request['email'])->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {        
        //         $request->session()->regenerate();
        //         return redirect()->intended('/');
        //     } else {
        //         return back()->withErrors([
        //             'password' => 'Wrong username or password',
        //         ]);
        //     }
        // } else {
        //     return back()->withErrors([
        //         'password' => 'Wrong username or password',
        //     ]);
        // }


    }
}
