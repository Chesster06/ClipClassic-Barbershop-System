<x-layout>
    <x-slot:title>Urus Tempahan | Admin</x-slot:title>

    <div class="pt-24 pb-16 bg-black min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('admin.bookings') }}" class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                </a>
                <h1 class="text-3xl font-bold text-white">Urus Tempahan</h1>
            </div>

            <div class="bg-zinc-900 rounded-2xl border border-white/5 p-6 md:p-8">
                @if ($errors->any())
                    <div class="mb-6 bg-red-900/40 border border-red-500/50 text-red-400 px-4 py-3 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Status -->
                        <div class="md:col-span-2 bg-zinc-800 p-4 md:p-6 rounded-xl border border-zinc-700">
                            <label class="block text-sm font-medium text-gray-300 mb-2">Status Tempahan</label>
                            <select name="status" class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 pr-12 text-white focus:outline-none focus:border-gold-500 transition-colors appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22white%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.25rem_center] bg-[length:1.2em_1.2em]">
                                <option value="pending" {{ strtolower($booking->status) === 'pending' ? 'selected' : '' }}>Pending (Menunggu)</option>
                                <option value="selesai" {{ strtolower($booking->status) === 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="batal" {{ strtolower($booking->status) === 'batal' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                        </div>

                        <!-- Customer Details -->
                        <div class="md:col-span-2 border-b border-zinc-800 pb-4 mt-2">
                            <h3 class="text-lg font-semibold text-gold-500">Maklumat Pelanggan</h3>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Nama Penuh</label>
                            <input type="text" name="customer_name" value="{{ old('customer_name', $booking->customer_name) }}" required
                                   class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Nombor Telefon</label>
                            <input type="tel" name="customer_phone" value="{{ old('customer_phone', $booking->customer_phone) }}" required
                                   class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition-colors">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-300 mb-2">E-mel (Pilihan)</label>
                            <input type="email" name="customer_email" value="{{ old('customer_email', $booking->customer_email) }}"
                                   class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition-colors">
                        </div>

                        <!-- Service Details -->
                        <div class="md:col-span-2 border-b border-zinc-800 pb-4 mt-2">
                            <h3 class="text-lg font-semibold text-gold-500">Maklumat Servis</h3>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Barber</label>
                            <select name="barber_name" required class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 pr-12 text-white focus:outline-none focus:border-gold-500 transition-colors appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22white%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.25rem_center] bg-[length:1.2em_1.2em]">
                                <option value="Johan Ahmad" {{ $booking->barber_name === 'Johan Ahmad' ? 'selected' : '' }}>Johan Ahmad</option>
                                <option value="Amirul Hakim" {{ $booking->barber_name === 'Amirul Hakim' ? 'selected' : '' }}>Amirul Hakim</option>
                                <option value="Faris Danial" {{ $booking->barber_name === 'Faris Danial' ? 'selected' : '' }}>Faris Danial</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Servis</label>
                            <select name="service_name" required class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 pr-12 text-white focus:outline-none focus:border-gold-500 transition-colors appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22white%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.25rem_center] bg-[length:1.2em_1.2em]">
                                <option value="Potongan Rambut Premium" {{ $booking->service_name === 'Potongan Rambut Premium' ? 'selected' : '' }}>Potongan Rambut Premium</option>
                                <option value="Trim Janggut & Hot Towel" {{ $booking->service_name === 'Trim Janggut & Hot Towel' ? 'selected' : '' }}>Trim Janggut & Hot Towel</option>
                                <option value="Full Package (Rambut + Janggut)" {{ $booking->service_name === 'Full Package (Rambut + Janggut)' ? 'selected' : '' }}>Full Package (Rambut + Janggut)</option>
                                <option value="Cuci & Styling" {{ $booking->service_name === 'Cuci & Styling' ? 'selected' : '' }}>Cuci & Styling</option>
                            </select>
                        </div>

                        <!-- Date & Time -->
                        <div class="md:col-span-2 border-b border-zinc-800 pb-4 mt-2">
                            <h3 class="text-lg font-semibold text-gold-500">Tarikh & Masa</h3>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Tarikh Tempahan</label>
                            <input type="text" name="booking_date" value="{{ old('booking_date', $booking->booking_date) }}" required
                                   x-data="{}" x-init="flatpickr($el, { altInput: true, altFormat: 'd/m/Y', dateFormat: 'Y-m-d' })"
                                   class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Masa Slot</label>
                            <select name="booking_time" required class="w-full bg-black border border-zinc-700 rounded-lg px-4 py-3 pr-12 text-white focus:outline-none focus:border-gold-500 transition-colors appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22white%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.25rem_center] bg-[length:1.2em_1.2em]">
                                @foreach(['10:00 AM', '11:00 AM', '12:00 PM', '02:00 PM', '03:00 PM', '04:00 PM', '05:00 PM', '08:00 PM', '09:00 PM'] as $time)
                                    <option value="{{ $time }}" {{ $booking->booking_time === $time ? 'selected' : '' }}>{{ $time }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="mt-10 flex justify-end gap-4 border-t border-zinc-800 pt-6">
                        <a href="{{ route('admin.bookings') }}" class="px-6 py-2 rounded-lg border border-zinc-700 text-gray-300 hover:bg-zinc-800 hover:text-white transition duration-200">
                            Batal
                        </a>
                        <button type="submit" class="bg-gold-500 hover:bg-gold-400 text-black px-8 py-2 rounded-lg font-bold transition duration-200">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
