<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\Auth\AuthService;
use App\Enums\Auth\AlertText;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin');
        }
    
        return view('auth.login');
    }


    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            $this->authService->login($validated['email'], $validated['password']);
            session()->flash('message', AlertText::LOGIN_CORRECTO->value);
            return redirect()->to('/admin');
        } catch (ValidationException $e) {
            session()->flash('error', $e->validator->errors()->first('email'));
            return redirect()->back()->withInput();
        } catch (\Exception $e) {
            session()->flash('error', AlertText::ERROR_INESPERADO->value);
            return redirect()->back();
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        return $this->authService->logout($request);
    }
}
