<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $telp;
    public $referralCode;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'telp' => 'required|string|max:20',
        'referralCode' => 'required|string',
    ];

    public function register()
    {
        $this->validate();

        // Simple referral code validation, replace 'KODE123' with actual logic
        if ($this->referralCode !== 'kostku1') {
            $this->addError('referralCode', 'Kode referral tidak valid.');
            return;
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'telp' => $this->telp,
        ]);

        session()->flash('message', 'Registrasi berhasil! Silakan login.');

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
