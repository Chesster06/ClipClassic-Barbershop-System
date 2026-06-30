<x-layout>
    <x-slot:title>Hubungi Kami | Klip Klasik Barbershop</x-slot:title>

    <div class="pt-24 pb-16 bg-black min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Hubungi <span class="text-gold-500">Kami</span></h1>
                <div class="h-1 w-24 bg-gold-500 mx-auto rounded mb-6"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Ada pertanyaan atau ingin memberi maklum balas? Jangan segan silu untuk menghubungi kami. Pasukan Klip Klasik sentiasa bersedia membantu anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                <!-- Contact Information & Map -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6">Maklumat Cawangan</h2>
                    
                    <div class="bg-zinc-900 rounded-2xl p-8 border border-white/5 mb-8">
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center text-gold-500 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-bold">Lokasi Kami</h3>
                                    <p class="text-gray-400 text-sm mt-1">No. 45, Jalan Maarof, Bangsar,<br>59000 Kuala Lumpur, Malaysia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center text-gold-500 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-bold">Hubungi Pintas</h3>
                                    <p class="text-gray-400 text-sm mt-1">+60 12-345 6789<br>hello@klipklasik.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center text-gold-500 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-bold">Waktu Operasi</h3>
                                    <div class="text-gray-400 text-sm mt-2 space-y-2">
                                        <div class="flex items-center gap-4"><span class="w-28">Isnin - Jumaat:</span><span class="text-white font-medium">10:00 AM - 10:00 PM</span></div>
                                        <div class="flex items-center gap-4"><span class="w-28">Sabtu - Ahad:</span><span class="text-white font-medium">09:00 AM - 11:00 PM</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Interactive Google Map -->
                    <div class="bg-zinc-800 rounded-2xl overflow-hidden h-64 border border-white/5 relative group">
                        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                src="https://maps.google.com/maps?q=Jalan%20Maarof,%20Bangsar,%20KL&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                                class="w-full h-full grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                        </iframe>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none">
                            <a href="https://maps.google.com/maps?q=Jalan%20Maarof,%20Bangsar,%20KL" target="_blank" class="pointer-events-auto bg-black/80 hover:bg-gold-500 text-white hover:text-black px-6 py-2 rounded-full font-semibold transition duration-300 backdrop-blur-sm border border-white/10 flex items-center gap-2 shadow-xl shadow-black/50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Buka di Google Maps
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6">Hantar Mesej</h2>
                    <form x-data="contactForm()" @submit.prevent="submitMessage()" class="bg-zinc-900 rounded-2xl p-8 border border-white/5 space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Nama Penuh</label>
                            <input type="text" id="name" x-model="name" required class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors" placeholder="Ali bin Abu">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Alamat Emel</label>
                            <input type="email" id="email" x-model="email" required class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors" placeholder="ali@contoh.com">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-400 mb-2">Perkara (Subjek)</label>
                            <div class="relative">
                                <select id="subject" x-model="subject" class="w-full bg-black border border-zinc-700 rounded-lg p-3 pr-12 text-gray-300 appearance-none focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors">
                                    <option>Pertanyaan Servis</option>
                                    <option>Masalah Tempahan</option>
                                    <option>Maklum Balas / Aduan</option>
                                    <option>Lain-lain</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-400 mb-2">Mesej Anda</label>
                            <textarea id="message" rows="5" x-model="message" required class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors" placeholder="Tuliskan mesej anda di sini..."></textarea>
                        </div>

                        <!-- Success/Error Messages -->
                        <div x-show="isSuccess" class="bg-green-900/40 border border-green-500/50 text-green-400 px-4 py-3 rounded-lg flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Mesej anda telah berjaya dihantar!</span>
                        </div>
                        <div x-show="errorMessage" class="bg-red-900/40 border border-red-500/50 text-red-400 px-4 py-3 rounded-lg flex items-center">
                            <span x-text="errorMessage"></span>
                        </div>

                        <button type="submit" :disabled="isLoading" class="w-full bg-gold-500 hover:bg-gold-400 text-black font-bold py-3 px-4 rounded-lg transition duration-300 shadow-[0_0_15px_rgba(212,175,55,0.2)] disabled:opacity-50 flex items-center justify-center">
                            <span x-show="isLoading" class="mr-2">...</span>
                            Hantar Mesej
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('contactForm', () => ({
                name: '',
                email: '',
                subject: 'Pertanyaan Servis',
                message: '',
                isLoading: false,
                isSuccess: false,
                errorMessage: '',

                submitMessage() {
                    this.isLoading = true;
                    this.isSuccess = false;
                    this.errorMessage = '';

                    fetch('/contact', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            name: this.name,
                            email: this.email,
                            subject: this.subject,
                            message: this.message
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.isLoading = false;
                        if(data.success) {
                            this.isSuccess = true;
                            this.name = '';
                            this.email = '';
                            this.message = '';
                        } else {
                            this.errorMessage = "Ralat sistem. Sila cuba lagi.";
                        }
                    })
                    .catch(error => {
                        this.isLoading = false;
                        this.errorMessage = "Gagal menyambung ke pangkalan data.";
                    });
                }
            }))
        })
    </script>
</x-layout>
