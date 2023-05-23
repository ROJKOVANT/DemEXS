<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        if (!Auth::attempt([
            'login' => $request->input('login'),
            'password' => $request->input('password')
        ])) {
            return redirect()->back()->withErrors([
                'all' => 'Не правильная почта или пароль!'
            ]);
        }
        $user = Auth::guard('sanctum')->user();
        Auth::login($user);
        $token = $user->createToken('auth_token')->plainTextToken;
        // Проверка на админа
        if($user->admin == 1){
            return redirect()->route('admin');
        } else {
            return redirect()->route('basket');
        }

    }
    public function registration(RegistrationRequest $request){
        if($request->password != $request->password_repeat){
            return redirect()->back()->withErrors([
                'password' => 'Пароли не совпадают',
            ]);
        } else {
            $user = User::create([
                'surname' => $request->surname,
                'name' => $request->name,
                'patronymic' => $request->patronymic,
                'login' => $request->login,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            Auth::login($user);
            return redirect()->route('basket');
        }
    }
    public function logout(){
        auth('sanctum')->user()->tokens()->delete();
        Auth::logout();
        return redirect()->route('main');
    }
}
