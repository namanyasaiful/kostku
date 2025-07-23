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
            <form class="max-w-md w-full  mx-auto">
                <h1 class="text-3xl sm:text-4xl font-semibold mb-4 text-center">Lupa Password</h1>
                <p class="text-lg sm:text-xl font-normal mb-10 sm:mb-12 text-center">Masukkan nomor telepon Anda untuk mendapatkan verifikasi</p>

                <!-- input No. Telp -->
                <div class="w-full flex items-center rounded-3xl border border-[#53AD9F] bg-white px-4 py-3 sm:px-6 sm:py-4 mb-10 sm:mb-12">
                    <img src="{{ asset('assets/phone.png') }}" alt="Logo" class="w-6 h-6 sm:w-6 sm:h-6 mr-3 sm:mr-4">
                    <input type="text" wire:model="phone" class="w-full focus:outline-none focus:ring-0 text-sm sm:text-base" placeholder="Masukkan nomor telepon anda">
                </div>

                <!-- Submit button -->
                <button wire:click.prevent="sendVerificationCode" class="w-full bg-[#53AD9F] text-white px-4 py-3 sm:px-6 sm:py-4 rounded-3xl hover:bg-[#3a8f7c] transition duration-300 mb-4 text-sm sm:text-base">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
