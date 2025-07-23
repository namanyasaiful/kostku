<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class VerificationPassword extends Component
{
    public $phone;
    public $code1;
    public $code2;
    public $code3;
    public $code4;
    public $message;

    public function mount($phone = null)
    {
        $this->phone = $phone;
    }

    public function verifyCode()
    {
        $this->validate([
            'code1' => 'required|digits:1',
            'code2' => 'required|digits:1',
            'code3' => 'required|digits:1',
            'code4' => 'required|digits:1',
        ]);

        $inputCode = $this->code1 . $this->code2 . $this->code3 . $this->code4;

        $cachedCode = Cache::get('password_reset_'.$this->phone);

        if ($cachedCode && $inputCode == $cachedCode) {
            // Code verified, redirect to new password page
            return redirect()->route('new-password', ['phone' => $this->phone]);
        } else {
            $this->message = "Kode verifikasi salah atau sudah kadaluarsa.";
        }
    }

    public function render()
    {
        return view('livewire.auth.verification-password');
    }
}
