<div class="w-full px-6 sm:px-10 md:px-20 lg:px-40 py-10">
    <form class="max-w-md w-full  mx-auto">
        <h1 class="text-3xl sm:text-4xl font-semibold mb-4 text-center">Register</h1>
        <p class="text-lg sm:text-xl font-normal mb-10 sm:mb-14 text-center">Buat username dan password, serta masukkan kode referral untuk register</p>

        <!-- input username -->
        <div class="w-full h-12 flex items-center rounded-2xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-4 mb-4 sm:mb-2">
            <img src="{{ asset('assets/username.png') }}" alt="Logo" class="w-6 h-6 sm:w- sm:h-6 mr-3 sm:mr-4">
            <input type="email" wire:model="email" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan email anda">
        </div>

        <!-- input password -->
        <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-4 mb-2">
            <img src="{{ asset('assets/password.png') }}" alt="Logo" class="w-6 h-6 sm:w-8 sm:h-8 mr-3 sm:mr-4">
            <input type="password" wire:model="password" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan password anda">
        </div>

        <!-- input No. Telp -->
        <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-4 mb-2">
            <img src="{{ asset('assets/password.png') }}" alt="Logo" class="w-6 h-6 sm:w-8 sm:h-8 mr-3 sm:mr-4">
            <input type="password" wire:model="password" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan nomor telepon anda">
        </div>

        <!-- input kode referal -->
        <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-4 mb-10">
            <img src="{{ asset('assets/password.png') }}" alt="Logo" class="w-6 h-6 sm:w-8 sm:h-8 mr-3 sm:mr-4">
            <input type="password" wire:model="password" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan kode referral">
        </div>


        <!-- login button -->
        <button wire:click.prevent="login" class="w-full bg-[#53AD9F] text-white px-4 py-3 sm:px-6 sm:py-4 rounded-3xl hover:bg-[#3a8f7c] transition duration-300 mb-4 text-sm sm:text-base">
            Login
        </button>

        <!-- register -->
        <div class="flex justify-center items-center">
            <p class="text-xs sm:text-sm font-extralight text-black">
                Sudah punya akun?
                <span><a href="/" class="font-semibold text-[#53AD9F] hover:text-[#3a8f7c] transition duration-300 ease-in-out">Login</a></span>
            </p>
        </div>
    </form>
</div>