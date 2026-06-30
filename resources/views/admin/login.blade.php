<x-layout>
    <x-slot:title>Admin Login | Klip Klasik</x-slot:title>

    <div class="min-h-[80vh] flex items-center justify-center pt-20 px-4">
        <div class="max-w-md w-full bg-zinc-900 rounded-2xl p-8 border border-white/5 shadow-2xl relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gold-500/10 rounded-full blur-3xl -mr-16 -mt-16"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-gold-500/10 rounded-full blur-3xl -ml-16 -mb-16"></div>

            <div class="relative">
                <div class="text-center mb-8">
                    <svg class="mx-auto h-12 w-12 text-gold-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <h2 class="text-2xl font-bold text-white tracking-wide">Admin Access</h2>
                    <p class="text-sm text-gray-400 mt-2">Sila log masuk untuk menguruskan tempahan.</p>
                </div>

                @if($errors->any())
                    <div class="mb-6 bg-red-900/40 border border-red-500/50 text-red-400 px-4 py-3 rounded-lg text-sm text-center">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="/admin/login" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Alamat Emel</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors" 
                            placeholder="admin@klipklasik.com">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Kata Laluan</label>
                        <input type="password" name="password" id="password" required 
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors" 
                            placeholder="password">
                    </div>

                    <button type="submit" class="w-full bg-gold-500 hover:bg-gold-400 text-black font-bold py-3 px-4 rounded-lg transition duration-300 shadow-[0_0_15px_rgba(212,175,55,0.2)]">
                        Log Masuk
                    </button>
                </form>
                
                <div class="mt-6 text-center text-xs text-gray-600">
                    Klip Klasik Barbershop &copy; {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</x-layout>
