<x-layout>
    <style>
        @keyframes slideUpFade {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up {
            opacity: 0;
            animation: slideUpFade 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 100ms; }
        .delay-300 { animation-delay: 300ms; }
        .delay-500 { animation-delay: 500ms; }
    </style>

    <!-- Hero Section -->
    <section class="relative h-screen min-h-[600px] flex items-center justify-center pt-20">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=2074&auto=format&fit=crop" alt="Barbershop Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/70 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-10">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight animate-slide-up delay-100">
                KLIP<span class="text-gold-500">KLASIK</span> BARBERSHOP
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-10 font-light animate-slide-up delay-300">
                Potongan Klasik, Gaya Moden
            </p>
            <div class="animate-slide-up delay-500">
                <a href="/booking" class="inline-block bg-gold-500 hover:bg-gold-400 text-black px-8 py-4 rounded-full font-semibold text-lg transition duration-300 shadow-[0_0_20px_rgba(212,175,55,0.4)] hover:shadow-[0_0_30px_rgba(212,175,55,0.7)] hover:-translate-y-1 transform">
                    Tempah Janji Temu
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Servis <span class="text-gold-500">Premium</span></h2>
                <div class="h-1 w-20 bg-gold-500 mx-auto rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-black border border-white/10 rounded-xl p-8 hover:border-gold-500/50 transition duration-300 group">
                    <div class="w-16 h-16 bg-zinc-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-gold-500 transition duration-300">
                        <svg class="w-8 h-8 text-gold-500 group-hover:text-black transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Potongan Rambut</h3>
                    <p class="text-gray-400 mb-4 text-sm">Fade, Pompadour, Buzz cut, Classic cut</p>
                    <div class="text-gold-500 font-bold">RM 35.00</div>
                </div>
                <!-- Service 2 -->
                <div class="bg-black border border-white/10 rounded-xl p-8 hover:border-gold-500/50 transition duration-300 group">
                    <div class="w-16 h-16 bg-zinc-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-gold-500 transition duration-300">
                        <svg class="w-8 h-8 text-gold-500 group-hover:text-black transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Trim Janggut</h3>
                    <p class="text-gray-400 mb-4 text-sm">Kemaskan janggut & misai dengan hot towel</p>
                    <div class="text-gold-500 font-bold">RM 20.00</div>
                </div>
                <!-- Service 3 -->
                <div class="bg-black border border-white/10 rounded-xl p-8 hover:border-gold-500/50 transition duration-300 group">
                    <div class="w-16 h-16 bg-zinc-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-gold-500 transition duration-300">
                        <svg class="w-8 h-8 text-gold-500 group-hover:text-black transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Cuci Rambut</h3>
                    <p class="text-gray-400 mb-4 text-sm">Cucian urutan kepala yang menenangkan</p>
                    <div class="text-gold-500 font-bold">RM 15.00</div>
                </div>
                <!-- Service 4 -->
                <div class="bg-black border border-white/10 rounded-xl p-8 hover:border-gold-500/50 transition duration-300 group">
                    <div class="w-16 h-16 bg-zinc-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-gold-500 transition duration-300">
                        <svg class="w-8 h-8 text-gold-500 group-hover:text-black transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Hair Styling</h3>
                    <p class="text-gray-400 mb-4 text-sm">Penggayaan rambut guna pomade kualiti tinggi</p>
                    <div class="text-gold-500 font-bold">RM 10.00</div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="/services" class="inline-flex items-center text-gold-500 hover:text-white transition-colors font-semibold group">
                    Lihat Semua Servis 
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Popular Barbers Section -->
    <section class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Barber <span class="text-gold-500">Terbaik Kami</span></h2>
                    <div class="h-1 w-20 bg-gold-500 rounded"></div>
                </div>
                <a href="/barbers" class="hidden md:inline-flex items-center text-gold-500 hover:text-white transition-colors font-semibold group">
                    Semua Barber <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Barber 1 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/barbers/johan.png" alt="Barber 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute top-4 right-4 bg-gold-500 text-black text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Paling Popular
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-bold text-white">Johan Ahmad</h3>
                            <div class="flex items-center text-gold-500">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="ml-1 font-bold text-white">4.9</span>
                            </div>
                        </div>
                        <p class="text-gold-500 font-medium mb-4">Pakar Skin Fade & Pompadour</p>
                        <a href="/booking?barber=johan" class="block text-center border border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-black py-3 rounded-lg font-semibold transition-colors">Tempah Johan</a>
                    </div>
                </div>
                <!-- Barber 2 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/barbers/amirul.png" alt="Barber 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-bold text-white">Amirul Hakim</h3>
                            <div class="flex items-center text-gold-500">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="ml-1 font-bold text-white">4.8</span>
                            </div>
                        </div>
                        <p class="text-gold-500 font-medium mb-4">Pakar Classic Cut & Beard</p>
                        <a href="/booking?barber=amirul" class="block text-center border border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-black py-3 rounded-lg font-semibold transition-colors">Tempah Amirul</a>
                    </div>
                </div>
                <!-- Barber 3 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/barbers/faris.png" alt="Barber 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-2xl font-bold text-white">Faris Danial</h3>
                            <div class="flex items-center text-gold-500">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="ml-1 font-bold text-white">4.7</span>
                            </div>
                        </div>
                        <p class="text-gold-500 font-medium mb-4">Pakar Modern Mullet & Color</p>
                        <a href="/booking?barber=faris" class="block text-center border border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-black py-3 rounded-lg font-semibold transition-colors">Tempah Faris</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-24 bg-zinc-900 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Apa Kata <span class="text-gold-500">Pelanggan</span></h2>
                <div class="h-1 w-20 bg-gold-500 mx-auto rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-black p-8 rounded-2xl border border-white/5 relative flex flex-col">
                    <svg class="absolute top-6 right-8 w-12 h-12 text-zinc-800" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-6">"Potongan rambut terbaik yang pernah saya dapat. Johan sangat teliti dan ruang barbershop ni memang nampak premium dan selesa!"</p>
                    <div class="flex items-center mt-auto">
                        <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-gold-500 font-bold">A</div>
                        <div class="ml-3">
                            <h4 class="text-white font-bold text-sm">Ahmad Fauzi</h4>
                            <p class="text-gray-500 text-xs">Pelanggan Tetap</p>
                        </div>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="bg-black p-8 rounded-2xl border border-white/5 relative flex flex-col">
                    <svg class="absolute top-6 right-8 w-12 h-12 text-zinc-800" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-6">"Sistem booking sangat mudah. Tak perlu tunggu lama bila sampai kedai sebab slot dah reserve. Servis tip top!"</p>
                    <div class="flex items-center mt-auto">
                        <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-gold-500 font-bold">K</div>
                        <div class="ml-3">
                            <h4 class="text-white font-bold text-sm">Kevin Raj</h4>
                            <p class="text-gray-500 text-xs">Jurutera</p>
                        </div>
                    </div>
                </div>
                <!-- Review 3 -->
                <div class="bg-black p-8 rounded-2xl border border-white/5 relative flex flex-col">
                    <svg class="absolute top-6 right-8 w-12 h-12 text-zinc-800" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-6">"Suasana yang sangat menenangkan sambil dengar lagu klasik. Trim janggut dengan hot towel memang wajib cuba!"</p>
                    <div class="flex items-center mt-auto">
                        <div class="w-10 h-10 bg-zinc-800 rounded-full flex items-center justify-center text-gold-500 font-bold">M</div>
                        <div class="ml-3">
                            <h4 class="text-white font-bold text-sm">Megat Zikri</h4>
                            <p class="text-gray-500 text-xs">Usahawan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
