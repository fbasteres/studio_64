<?php

namespace App\Services\Auth;

class AuthService 
{
	public function login()
	{
		$user = User::where('email', $email)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => [AlertText::ERROR_CREDENCIALES_INVALIDAS->value]
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