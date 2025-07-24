<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    // Tentukan layout yang dipakai oleh komponen ini
    public string $layout = 'components.layouts.auth';

    public $username = '';
    public $password = '';

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        if (Auth::check()) {
            $this->dispatchBrowserEvent('already-logged-in', ['message' => 'Anda sudah login, silakan logout terlebih dahulu.']);
            return;
        }

        $this->validate();

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'pengelola') {
                return redirect()->intended(route('dashboard.pengelola'));
            } elseif ($user->role === 'penyewa') {
                return redirect()->intended(route('dashboard.penyewa'));
            } else {
                // Default redirect if role is not recognized
                return redirect()->intended(route('login'));
            }
        }

        throw ValidationException::withMessages([
            'username' => __('auth.failed'),
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
