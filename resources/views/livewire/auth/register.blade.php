    <div class="w-full min-h-screen bg-gray-100 flex flex-col lg:flex-row">
        <!-- Sidebar hanya tampil di desktop -->
        <div class="hidden lg:flex w-1/2 min-h-screen bg-[#53AD9F] text-white flex-col justify-center items-start px-20">
            <h1 class="font-bold text-5xl mb-4">Ayo kelola kostmu bersama KOSTKU</h1>
            <p class="text-2xl mb-20">Kini mengelola kost menjadi lebih mudah</p>
            <div class="px-40">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-60 h-48">
            </div>
        </div>

        <!-- register -->
        <div class="w-full lg:w-1/2 min-h-screen bg-white text-black flex flex-col justify-center items-center">
            <div class="w-full px-6 sm:px-10 md:px-20 lg:px-40 py-10">
                <form class="max-w-md w-full mx-auto">
                    <h1 class="text-3xl sm:text-3xl font-semibold mb-4 text-center">Register</h1>
                    <p class="text-lg sm:text-lg font-normal mb-10 sm:mb-14 text-center">Buat username dan password, serta masukkan kode referral untuk register</p>

                    <!-- input name -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-2">
                        <img src="{{ asset('assets/username.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                        <input type="text" wire:model="name" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan nama anda">
                    </div>

                    <!-- input email -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-2">
                        <img src="{{ asset('assets/username.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                        <input type="email" wire:model="email" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan email anda">
                    </div>

                    <!-- input password -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-2">
                        <img src="{{ asset('assets/password.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                        <input type="password" wire:model="password" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan password anda">
                    </div>

                    <!-- input No. Telp -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-2">
                        <img src="{{ asset('assets/phone.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                        <input type="number" wire:model="telp" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan nomor telepon anda">
                    </div>

                    <!-- input kode referal -->
                    <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-3 mb-10">
                        <img src="{{ asset('assets/verified.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                        <input type="text" wire:model="referralCode" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan kode referral">
                    </div>


                    <!-- register button -->
                    <button wire:click.prevent="register" class="w-full bg-[#53AD9F] text-white px-4 py-3 sm:px-6 sm:py-4 rounded-3xl hover:bg-[#3a8f7c] transition duration-300 mb-4 text-sm sm:text-base">
                        Register
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
        </div>
    </div>
