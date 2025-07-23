<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;

class NewPassword extends Component
{
    public $phone;
    public $password;
    public $password_confirmation;
    public $message;

    public function mount($phone = null)
    {
        $this->phone = $phone;
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('phone', $this->phone)->first();

        if (!$user) {
            $this->message = "Nomor telepon tidak ditemukan.";
            return;
        }

        $user->password = Hash::make($this->password);
        $user->save();

        // Clear cache for this phone
        Cache::forget('password_reset_'.$this->phone);

        $this->message = "Password berhasil diubah. Silakan login dengan password baru Anda.";

        // Redirect to login page after password change
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.new-password');
    }
}
