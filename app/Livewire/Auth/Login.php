<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component

{
    // Tentukan layout yang dipakai oleh komponen ini
    public string $layout = 'components.layouts.auth';

    // hanya untuk testing masuk ke dashboard pengelola, memastika button berfungsi
    public function login()
    {
        // Tes langsung redirect tanpa logic
        return redirect()->route('dashboard.pengelola');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
