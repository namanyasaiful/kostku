<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ForgotPassword extends Component
{
    public $phone;
    public $message;

    public function sendVerificationCode()
    {
        $this->validate([
            'phone' => 'required|digits_between:10,15',
        ]);

        // Generate 4 digit code
        $code = rand(1000, 9999);

        // Store code in cache with phone as key, expires in 10 minutes
        Cache::put('password_reset_'.$this->phone, $code, now()->addMinutes(10));

        // Simulate sending SMS here (integration can be added)
        $this->message = "Kode verifikasi telah dikirim ke nomor " . $this->phone;

        // Redirect to verification page with phone number
        return redirect()->route('verification-password', ['phone' => $this->phone]);
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
