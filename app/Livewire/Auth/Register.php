<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $username;
    public $password;
    public $telp;
    public $referralCode;

    protected $rules = [
        'username' => 'required|string|max:255|unique:users,username',
        'password' => 'required|string|min:6',
        'telp' => 'required|string|max:20',
        'referralCode' => 'required|string',
    ];

    public function register()
    {
        $this->validate();

        // Validasi kode referral harus 'kostku1'
        if ($this->referralCode !== 'kostku1') {
            $this->addError('referralCode', 'Kode referral tidak valid.');
            return;
        }

        // Simpan user dengan role penyewa
        User::create([
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'telp' => $this->telp,
            'role' => 'penyewa',
        ]);

        session()->flash('message', 'Registrasi berhasil! Silakan login.');

        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
