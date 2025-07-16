<!-- resources/views/components/sidebar/pengelola.blade.php -->
<nav class="w-64 bg-green-600 text-white min-h-screen p-4">
    <div class="mb-8 text-center">
        <h2 class="text-xl font-bold">MENU PENGELOLA</h2>
        <p class="text-sm">{{ auth()->user()->name }}</p>
    </div>

    <ul class="space-y-2">
        <li>
            <a href="/dashboard" class="flex items-center p-2 hover:bg-green-700 rounded">
                📊 Dashboard
            </a>
        </li>
        <li>
            <a href="/data-kost" class="flex items-center p-2 hover:bg-green-700 rounded">
                🏠 Data Kost
            </a>
        </li>
        <li>
            <a href="/pembayaran" class="flex items-center p-2 hover:bg-green-700 rounded">
                💰 Pembayaran
            </a>
        </li>
    </ul>

    <form method="POST" action="{{ route('logout') }}" class="mt-8">
        @csrf
        <button type="submit" class="w-full flex items-center p-2 hover:bg-red-600 rounded">
            🔴 Logout
        </button>
    </form>
</nav>