<x-layout>
    <x-slot:title>Barber Terbaik Kami | Klip Klasik Barbershop</x-slot:title>

    <div class="pt-24 pb-16 bg-black min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Kenali <span class="text-gold-500">Pakar Kami</span></h1>
                <div class="h-1 w-24 bg-gold-500 mx-auto rounded mb-6"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Tukang gunting rambut kami bukan sekadar barber biasa, mereka adalah artis yang berdedikasi memastikan anda tampil paling kacak dan berkeyakinan tinggi.</p>
            </div>

            <div class="space-y-12">
                <!-- Barber 1 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden border border-white/5 flex flex-col md:flex-row group hover:border-gold-500/30 transition duration-300">
                    <div class="md:w-1/3 relative h-80 md:h-auto overflow-hidden">
                        <img src="/images/barbers/johan.png" alt="Barber 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute top-4 left-4 bg-gold-500 text-black text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Paling Popular</div>
                    </div>
                    <div class="md:w-2/3 p-8 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h2 class="text-3xl font-bold text-white mb-1">Johan Ahmad</h2>
                                    <p class="text-gold-500 font-medium">Senior Barber & Founder (Pengalaman 8 Tahun)</p>
                                </div>
                                <div class="flex items-center bg-black px-3 py-1 rounded-lg border border-zinc-700">
                                    <svg class="w-5 h-5 text-gold-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <span class="ml-2 font-bold text-white">4.9</span>
                                    <span class="text-gray-500 text-sm ml-1">(120+ Review)</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Johan dikenali dengan kemahirannya melakukan potongan Skin Fade yang sangat kemas dan tajam. Beliau juga pakar dalam menggayakan Pompadour klasik untuk pelanggan korporat yang inginkan penampilan profesional namun bergaya.
                            </p>

                            <div class="mb-6">
                                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Skill Khas:</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Skin Fade</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Pompadour</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Beard Sculpting</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Hot Towel Shave</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 items-center justify-between border-t border-white/10 pt-6">
                            <div class="text-sm text-gray-400">
                                <span class="text-white font-medium">Jadual:</span> Isnin - Jumaat (10AM - 8PM)
                            </div>
                            <a href="/booking?barber=1" class="w-full sm:w-auto text-center bg-gold-500 hover:bg-gold-400 text-black px-8 py-3 rounded-lg font-semibold transition-colors shadow-[0_0_15px_rgba(212,175,55,0.3)]">
                                Tempah Johan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Barber 2 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden border border-white/5 flex flex-col md:flex-row group hover:border-gold-500/30 transition duration-300">
                    <div class="md:w-1/3 relative h-80 md:h-auto overflow-hidden">
                        <img src="/images/barbers/amirul.png" alt="Barber 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="md:w-2/3 p-8 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h2 class="text-3xl font-bold text-white mb-1">Amirul Hakim</h2>
                                    <p class="text-gold-500 font-medium">Master Barber (Pengalaman 5 Tahun)</p>
                                </div>
                                <div class="flex items-center bg-black px-3 py-1 rounded-lg border border-zinc-700">
                                    <svg class="w-5 h-5 text-gold-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <span class="ml-2 font-bold text-white">4.8</span>
                                    <span class="text-gray-500 text-sm ml-1">(85+ Review)</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Suka dengan gaya lelaki budiman tradisional? Amirul adalah pakar potongan "Classic Cut" dan sangat mahir menguruskan janggut yang panjang. Perhatian beliau terhadap perincian (detail) adalah luar biasa.
                            </p>

                            <div class="mb-6">
                                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Skill Khas:</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Classic Cut</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Scissor Work</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Long Beard Trim</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Head Massage</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 items-center justify-between border-t border-white/10 pt-6">
                            <div class="text-sm text-gray-400">
                                <span class="text-white font-medium">Jadual:</span> Selasa - Ahad (12PM - 10PM)
                            </div>
                            <a href="/booking?barber=2" class="w-full sm:w-auto text-center border border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-black px-8 py-3 rounded-lg font-semibold transition-colors">
                                Tempah Amirul
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Barber 3 -->
                <div class="bg-zinc-900 rounded-2xl overflow-hidden border border-white/5 flex flex-col md:flex-row group hover:border-gold-500/30 transition duration-300">
                    <div class="md:w-1/3 relative h-80 md:h-auto overflow-hidden">
                        <img src="/images/barbers/faris.png" alt="Barber 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="md:w-2/3 p-8 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h2 class="text-3xl font-bold text-white mb-1">Faris Danial</h2>
                                    <p class="text-gold-500 font-medium">Stylist Barber (Pengalaman 3 Tahun)</p>
                                </div>
                                <div class="flex items-center bg-black px-3 py-1 rounded-lg border border-zinc-700">
                                    <svg class="w-5 h-5 text-gold-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <span class="ml-2 font-bold text-white">4.7</span>
                                    <span class="text-gray-500 text-sm ml-1">(50+ Review)</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Jika anda inginkan kelainan, Faris adalah orangnya. Beliau sangat up-to-date dengan trend potongan masa kini seperti Modern Mullet, Burst Fade, dan mahir dalam pewarnaan rambut (Hair Color).
                            </p>

                            <div class="mb-6">
                                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Skill Khas:</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Modern Mullet</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Burst Fade</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Hair Coloring</span>
                                    <span class="bg-zinc-800 text-gray-300 px-3 py-1 rounded text-sm border border-zinc-700">Textured Crop</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-col sm:flex-row gap-4 items-center justify-between border-t border-white/10 pt-6">
                            <div class="text-sm text-gray-400">
                                <span class="text-white font-medium">Jadual:</span> Rabu - Isnin (10AM - 8PM)
                            </div>
                            <a href="/booking?barber=3" class="w-full sm:w-auto text-center border border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-black px-8 py-3 rounded-lg font-semibold transition-colors">
                                Tempah Faris
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
