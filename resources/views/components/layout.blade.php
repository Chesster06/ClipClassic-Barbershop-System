<!DOCTYPE html>
<html lang="ms" class="scroll-smooth">
<!-- Vite HMR Trigger -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Klip Klasik Barbershop' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Flatpickr for Date Picker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <!-- Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-sans antialiased flex flex-col min-h-screen">

    <!-- Sticky Navbar -->
    <header class="fixed w-full z-50 bg-black/90 backdrop-blur-md border-b border-white/10" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold tracking-wider text-white">
                        KLIP<span class="text-gold-500">KLASIK</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="{{ request()->is('/') ? 'text-gold-500 font-bold' : 'text-gray-300 hover:text-gold-500 font-medium' }} transition-colors px-3 py-2 text-sm">Laman Utama</a>
                    <a href="/services" class="{{ request()->is('services') ? 'text-gold-500 font-bold' : 'text-gray-300 hover:text-gold-500 font-medium' }} transition-colors px-3 py-2 text-sm">Servis</a>
                    <a href="/barbers" class="{{ request()->is('barbers') ? 'text-gold-500 font-bold' : 'text-gray-300 hover:text-gold-500 font-medium' }} transition-colors px-3 py-2 text-sm">Barber Kami</a>
                    <a href="/contact" class="{{ request()->is('contact') ? 'text-gold-500 font-bold' : 'text-gray-300 hover:text-gold-500 font-medium' }} transition-colors px-3 py-2 text-sm">Hubungi</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="/admin/bookings" class="text-gray-400 hover:text-gold-500 transition-colors text-sm font-medium flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        Admin Login
                    </a>
                    <a href="/booking" class="bg-gold-500 hover:bg-gold-400 text-black px-6 py-2 rounded-full font-semibold transition duration-300 shadow-[0_0_15px_rgba(212,175,55,0.4)] hover:shadow-[0_0_25px_rgba(212,175,55,0.6)]">
                        Tempah Sekarang
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display:none;"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-zinc-900 border-b border-white/10" style="display:none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base {{ request()->is('/') ? 'text-gold-500 font-bold bg-zinc-800' : 'text-gray-300 font-medium hover:bg-zinc-800 hover:text-gold-500' }}">Laman Utama</a>
                <a href="/services" class="block px-3 py-2 rounded-md text-base {{ request()->is('services') ? 'text-gold-500 font-bold bg-zinc-800' : 'text-gray-300 font-medium hover:bg-zinc-800 hover:text-gold-500' }}">Servis</a>
                <a href="/barbers" class="block px-3 py-2 rounded-md text-base {{ request()->is('barbers') ? 'text-gold-500 font-bold bg-zinc-800' : 'text-gray-300 font-medium hover:bg-zinc-800 hover:text-gold-500' }}">Barber Kami</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base {{ request()->is('contact') ? 'text-gold-500 font-bold bg-zinc-800' : 'text-gray-300 font-medium hover:bg-zinc-800 hover:text-gold-500' }}">Hubungi</a>
                <a href="/booking" class="block mt-4 px-3 py-2 text-center rounded-md text-base font-medium bg-gold-500 text-black hover:bg-gold-400">Tempah Sekarang</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-zinc-900 border-t border-white/5 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-1">
                    <a href="/" class="text-2xl font-bold tracking-wider text-white">
                        KLIP<span class="text-gold-500">KLASIK</span>
                    </a>
                    <p class="mt-4 text-gray-400 text-sm leading-relaxed">
                        Potongan Klasik, Gaya Moden. Barbershop pilihan utama untuk penampilan maskulin anda.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Pautan Pantas</h3>
                    <ul class="space-y-3">
                        <li><a href="/services" class="text-gray-400 hover:text-gold-500 transition-colors text-sm">Servis Kami</a></li>
                        <li><a href="/barbers" class="text-gray-400 hover:text-gold-500 transition-colors text-sm">Barber Terbaik</a></li>
                        <li><a href="/booking" class="text-gray-400 hover:text-gold-500 transition-colors text-sm">Tempah Janji Temu</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Hubungi Kami</h3>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-gold-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Jalan Maarof, Bangsar, KL</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gold-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+60 12-345 6789</span>
                        </li>
                    </ul>
                </div>

                <!-- Operation Hours -->
                <div>
                    <h3 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Waktu Operasi</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex justify-between">
                            <span>Isnin - Jumaat</span>
                            <span class="text-white">10 AM - 10 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu - Ahad</span>
                            <span class="text-white">9 AM - 11 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-white/5 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Klip Klasik Barbershop. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
