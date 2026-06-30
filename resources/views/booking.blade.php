<x-layout>
    <div class="min-h-screen bg-zinc-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-white mb-2">Tempah <span class="text-gold-500">Janji Temu</span></h1>
                <p class="text-gray-400">Pilih barber, servis, dan masa yang sesuai untuk anda.</p>
            </div>

            <!-- Booking Widget with Alpine.js -->
            <div x-data="bookingForm()" class="bg-black rounded-2xl shadow-2xl border border-white/10 overflow-hidden">
                
                <!-- Progress Bar -->
                <div class="bg-zinc-800 px-6 py-4 border-b border-white/5">
                    <div class="flex items-center justify-between relative">
                        <div class="absolute left-0 top-4 -translate-y-1/2 w-full h-1 bg-zinc-700 z-0"></div>
                        <div class="absolute left-0 top-4 -translate-y-1/2 h-1 bg-gold-500 z-0 transition-all duration-500" :style="'width: ' + ((step - 1) / 4 * 100) + '%'"></div>
                        
                        <template x-for="i in 5" :key="i">
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm transition-colors duration-300"
                                     :class="step >= i ? 'bg-gold-500 text-black' : 'bg-zinc-700 text-gray-400'">
                                    <span x-text="i"></span>
                                </div>
                                <span class="hidden sm:block text-xs mt-2 font-medium" 
                                      :class="step >= i ? 'text-gold-500' : 'text-gray-500'"
                                      x-text="getStepName(i)"></span>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="p-6 sm:p-10 min-h-[400px]">
                    <!-- Step 1: Barber -->
                    <div x-show="step === 1" x-transition.opacity.duration.300ms>
                        <h2 class="text-xl font-bold text-white mb-6">Langkah 1: Pilih Barber</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <template x-for="b in barbers" :key="b.id">
                                <div @click="barber = b; nextStep()" 
                                     class="cursor-pointer border-2 rounded-xl overflow-hidden transition-all duration-200 group"
                                     :class="barber?.id === b.id ? 'border-gold-500 bg-zinc-800' : 'border-zinc-800 hover:border-gold-500/50 bg-black'">
                                    <img :src="b.image" :alt="b.name" class="w-full h-40 object-cover opacity-80 group-hover:opacity-100 transition-opacity">
                                    <div class="p-4 text-center">
                                        <h3 class="font-bold text-white" x-text="b.name"></h3>
                                        <div class="text-gold-500 text-sm flex justify-center items-center mt-1">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                            <span class="ml-1" x-text="b.rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Step 2: Service -->
                    <div x-show="step === 2" x-transition.opacity.duration.300ms style="display: none;">
                        <h2 class="text-xl font-bold text-white mb-6">Langkah 2: Pilih Servis</h2>
                        <div class="space-y-4">
                            <template x-for="s in services" :key="s.id">
                                <div @click="service = s" 
                                     class="cursor-pointer border-2 rounded-xl p-4 flex items-center justify-between transition-all duration-200"
                                     :class="service?.id === s.id ? 'border-gold-500 bg-zinc-800' : 'border-zinc-800 hover:border-gold-500/50 bg-black'">
                                    <div class="flex items-center">
                                        <div class="w-6 h-6 rounded-full border-2 mr-4 flex items-center justify-center"
                                             :class="service?.id === s.id ? 'border-gold-500' : 'border-zinc-600'">
                                            <div x-show="service?.id === s.id" class="w-3 h-3 bg-gold-500 rounded-full"></div>
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-white text-lg" x-text="s.name"></h3>
                                            <p class="text-sm text-gray-400" x-text="s.duration + ' minit'"></p>
                                        </div>
                                    </div>
                                    <div class="text-gold-500 font-bold text-lg" x-text="'RM ' + s.price"></div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Step 3: Date -->
                    <div x-show="step === 3" x-transition.opacity.duration.300ms style="display: none;">
                        <h2 class="text-xl font-bold text-white mb-6">Langkah 3: Pilih Tarikh</h2>
                        <div class="bg-zinc-800 rounded-xl p-6 border border-white/5">
                            <input type="text" x-model="date" 
                                   x-init="flatpickr($el, { altInput: true, altFormat: 'd/m/Y', dateFormat: 'Y-m-d', minDate: 'today', disable: [function(date) { return date.getDay() === 1; }] })"
                                   placeholder="Pilih Tarikh"
                                   class="w-full bg-black border border-zinc-700 rounded-lg p-4 text-white focus:outline-none focus:border-gold-500 focus:ring-1 focus:ring-gold-500 transition-colors">
                            <p class="mt-4 text-sm text-gray-400"><span class="text-gold-500 font-bold">Note:</span> Kedai tutup pada hari Isnin.</p>
                        </div>
                    </div>

                    <!-- Step 4: Time -->
                    <div x-show="step === 4" x-transition.opacity.duration.300ms style="display: none;">
                        <h2 class="text-xl font-bold text-white mb-6">Langkah 4: Pilih Masa</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
                            <template x-for="t in timeSlots" :key="t">
                                <button @click="time = t"
                                        class="py-3 px-2 rounded-lg font-medium text-sm transition-all duration-200 border-2 focus:outline-none"
                                        :class="time === t ? 'bg-gold-500 border-gold-500 text-black' : 'bg-black border-zinc-800 text-gray-300 hover:border-gold-500/50 hover:text-white'">
                                    <span x-text="t"></span>
                                </button>
                            </template>
                        </div>
                    </div>

                    <!-- Step 5: Summary & Customer Details -->
                    <div x-show="step === 5" x-transition.opacity.duration.300ms style="display: none;">
                        <h2 class="text-xl font-bold text-white mb-6">Ringkasan & Maklumat Anda</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            
                            <!-- Customer Details Form -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Nama Penuh <span class="text-red-500">*</span></label>
                                    <input type="text" x-model="customer_name" class="w-full bg-zinc-800 border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 transition-colors" placeholder="Cth: Ahmad Albab">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">No. Telefon <span class="text-red-500">*</span></label>
                                    <input type="text" x-model="customer_phone" class="w-full bg-zinc-800 border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 transition-colors" placeholder="Cth: 0123456789">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Emel (Pilihan)</label>
                                    <input type="email" x-model="customer_email" class="w-full bg-zinc-800 border border-zinc-700 rounded-lg p-3 text-white focus:outline-none focus:border-gold-500 transition-colors" placeholder="Cth: ahmad@emel.com">
                                </div>
                            </div>

                            <!-- Summary Box -->
                            <div class="bg-zinc-800 rounded-xl p-8 border border-white/5 space-y-6 h-fit">
                                <div class="flex justify-between items-start gap-4 border-b border-zinc-700 pb-6">
                                    <span class="text-gray-400 mt-1 shrink-0">Barber</span>
                                    <span class="font-bold text-white text-right break-words" x-text="barber?.name"></span>
                                </div>
                                <div class="flex justify-between items-start gap-4 border-b border-zinc-700 pb-6">
                                    <span class="text-gray-400 mt-1 shrink-0">Servis</span>
                                    <div class="text-right">
                                        <div class="font-bold text-white break-words" x-text="service?.name"></div>
                                        <div class="text-sm text-gold-500 mt-2" x-text="service?.duration + ' minit'"></div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-start gap-4 border-b border-zinc-700 pb-6">
                                    <span class="text-gray-400 mt-1 shrink-0">Tarikh & Masa</span>
                                    <div class="text-right">
                                        <div class="font-bold text-white break-words" x-text="formatDate(date)"></div>
                                        <div class="text-sm text-gold-500 mt-2" x-text="time"></div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center gap-4 pt-2">
                                    <span class="text-lg text-gray-300 font-medium shrink-0">Jumlah Pembayaran</span>
                                    <span class="text-2xl font-bold text-gold-500" x-text="'RM ' + service?.price"></span>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Success & Error Messages -->
                        <div x-show="isSuccess" class="mt-6 bg-green-900/40 border border-green-500/50 text-green-400 px-4 py-3 rounded-lg flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Tahniah! Tempahan anda telah berjaya disahkan.</span>
                        </div>
                        <div x-show="errorMessage" class="mt-6 bg-red-900/40 border border-red-500/50 text-red-400 px-4 py-3 rounded-lg flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span x-text="errorMessage"></span>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="bg-zinc-800 px-6 py-4 border-t border-white/5 flex flex-col-reverse sm:flex-row justify-between items-center gap-4">
                    <button @click="prevStep()" 
                            x-show="step > 1 && !isSuccess" 
                            class="w-full sm:w-auto px-6 py-2 rounded-full border border-zinc-600 text-gray-300 hover:bg-zinc-700 hover:text-white transition duration-200">
                        Kembali
                    </button>
                    <div x-show="step === 1" class="hidden sm:block w-full"></div> <!-- Spacer for step 1 -->

                    <button @click="nextStep()" 
                            x-show="step < 5" 
                            :disabled="!canProceed()"
                            class="w-full sm:w-auto sm:ml-auto px-8 py-2 rounded-full font-semibold transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                            :class="canProceed() ? 'bg-gold-500 hover:bg-gold-400 text-black shadow-[0_0_15px_rgba(212,175,55,0.4)]' : 'bg-zinc-700 text-zinc-500'">
                        Seterusnya
                    </button>

                    <button @click="submitBooking()" 
                            x-show="step === 5 && !isSuccess" 
                            :disabled="isLoading || !customer_name || !customer_phone"
                            class="w-full sm:w-auto sm:ml-auto bg-gold-500 hover:bg-gold-400 text-black px-8 py-2 rounded-full font-semibold transition duration-200 shadow-[0_0_15px_rgba(212,175,55,0.4)] disabled:opacity-50 flex justify-center items-center">
                        <span x-show="isLoading" class="mr-2">...</span>
                        Sahkan Tempahan
                    </button>
                    
                    <a href="/" 
                       x-show="isSuccess" 
                       class="w-full sm:w-auto sm:ml-auto text-center bg-zinc-700 hover:bg-zinc-600 text-white px-8 py-2 rounded-full font-semibold transition duration-200">
                        Kembali ke Laman Utama
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Alpine.js Component Logic -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('bookingForm', () => ({
                step: 1,
                barber: null,
                service: null,
                date: null,
                time: null,
                customer_name: '',
                customer_phone: '',
                customer_email: '',
                isSuccess: false,
                isLoading: false,
                errorMessage: '',
                
                barbers: [
                    { id: 1, name: 'Johan Ahmad', rating: 4.9, image: '/images/barbers/johan.png' },
                    { id: 2, name: 'Amirul Hakim', rating: 4.8, image: '/images/barbers/amirul.png' },
                    { id: 3, name: 'Faris Danial', rating: 4.7, image: '/images/barbers/faris.png' }
                ],
                
                services: [
                    { id: 1, name: 'Potongan Rambut Premium', price: '35.00', duration: 45 },
                    { id: 2, name: 'Trim Janggut & Hot Towel', price: '20.00', duration: 30 },
                    { id: 3, name: 'Full Package (Rambut + Janggut)', price: '50.00', duration: 60 },
                    { id: 4, name: 'Cuci & Styling', price: '15.00', duration: 20 }
                ],
                
                timeSlots: [
                    '10:00 AM', '11:00 AM', '12:00 PM', '02:00 PM', 
                    '03:00 PM', '04:00 PM', '05:00 PM', '08:00 PM', '09:00 PM'
                ],

                getStepName(num) {
                    const names = { 1: 'Barber', 2: 'Servis', 3: 'Tarikh', 4: 'Masa', 5: 'Sahkan' };
                    return names[num];
                },

                canProceed() {
                    if (this.step === 1) return this.barber !== null;
                    if (this.step === 2) return this.service !== null;
                    if (this.step === 3) return this.date !== null && this.date !== '';
                    if (this.step === 4) return this.time !== null;
                    return true;
                },

                nextStep() {
                    if (this.canProceed() && this.step < 5) {
                        this.step++;
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                },

                prevStep() {
                    if (this.step > 1) {
                        this.step--;
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                },

                getToday() {
                    return new Date().toISOString().split('T')[0];
                },

                formatDate(dateString) {
                    if (!dateString) return '';
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    return new Date(dateString).toLocaleDateString('ms-MY', options);
                },

                submitBooking() {
                    if(!this.customer_name || !this.customer_phone) {
                        this.errorMessage = "Sila isi Nama dan Nombor Telefon.";
                        return;
                    }
                    this.isLoading = true;
                    this.errorMessage = '';

                    fetch('/booking', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            customer_name: this.customer_name,
                            customer_phone: this.customer_phone,
                            customer_email: this.customer_email,
                            barber_name: this.barber.name,
                            service_name: this.service.name,
                            booking_date: this.date,
                            booking_time: this.time,
                            total_price: this.service.price
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.isLoading = false;
                        if(data.success) {
                            this.isSuccess = true;
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
