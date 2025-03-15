<?php


namespace App\Services\Auth;

use App\Enums\Admin\AlertText;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{  
    public function login(string $username, string $password)
    {
        $user = User::where('email', $username)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => [AlertText::ERROR_CREDENCIALES->value]
            ]);
        }

        Auth::login($user);
        return $user;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



}