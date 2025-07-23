<div class="w-full min-h-screen bg-gray-100 flex flex-col lg:flex-row">
    <!-- Sidebar hanya tampil di desktop -->
    <div class="hidden lg:flex w-1/2 min-h-screen bg-[#53AD9F] text-white flex-col justify-center items-start px-20">
        <h1 class="font-bold text-5xl mb-4">Ayo kelola kostmu bersama KOSTKU</h1>
        <p class="text-2xl mb-20">Kini mengelola kost menjadi lebih mudah</p>
        <div class="px-40">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-60 h-48">
        </div>
    </div>

    <!-- Login -->
    <div class="w-full lg:w-1/2 min-h-screen bg-white text-black flex flex-col justify-center items-center">
        <div class="w-full px-6 sm:px-10 md:px-20 lg:px-40 py-10">
                <form class="max-w-md w-full  mx-auto" wire:submit.prevent="login">
                    <h1 class="text-3xl sm:text-4xl font-semibold mb-4 text-center">Login</h1>
                    <p class="text-lg sm:text-xl font-normal mb-10 sm:mb-18 text-center">Masukkan username dan password anda untuk login</p>

                    @if ($errors->any())
                        <div class="mb-4 text-red-600 text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- input username -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-4 sm:mb-6">
                        <img src="{{ asset('assets/username.png') }}" alt="Logo" class="w-6 h-6 sm:w-8 sm:h-8 mr-3 sm:mr-4">
                        <input type="email" wire:model="email" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan email anda" required>
                    </div>

                    <!-- input password -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-2">
                        <img src="{{ asset('assets/password.png') }}" alt="Logo" class="w-6 h-6 sm:w-8 sm:h-8 mr-3 sm:mr-4">
                        <input type="password" wire:model="password" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan password anda" required>
                    </div>

                    <!-- forget password -->
                    <div class="flex justify-end items-center mb-6 sm:mb-8 w-full">
                        <a href="#" class="text-xs sm:text-sm font-normal text-[#53AD9F] hover:text-[#3a8f7c] transition duration-300 ease-in-out">Lupa password?</a>
                    </div>

                    <!-- login button -->
                    <button type="submit" class="w-full bg-[#53AD9F] text-white px-4 py-3 sm:px-6 sm:py-4 rounded-3xl hover:bg-[#3a8f7c] transition duration-300 mb-4 text-sm sm:text-base">
                        Login
                    </button>

                    <!-- register -->
                    <div class="flex justify-center items-center">
                        <p class="text-xs sm:text-sm font-extralight text-black">
                            Belum punya akun?
                            <span><a href="{{ route('register') }}" class="font-semibold text-[#53AD9F] hover:text-[#3a8f7c] transition duration-300 ease-in-out">Register</a></span>
                        </p>
                    </div>
                </form>
        </div>
    </div>
</div>
