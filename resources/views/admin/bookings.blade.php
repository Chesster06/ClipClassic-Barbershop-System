<x-layout>
    <x-slot:title>Admin Dashboard | Tempahan</x-slot:title>

    <div class="pt-24 pb-16 bg-black min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2">Admin Dashboard</h1>
                    <p class="text-gray-400">Senarai Tempahan Pelanggan Terkini</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="bg-zinc-800 px-4 py-2 rounded-lg border border-zinc-700 flex items-center">
                        <span class="text-sm text-gray-400">Jumlah Tempahan:</span>
                        <span class="text-2xl font-bold text-gold-500 ml-3">{{ $bookings->count() }}</span>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-900/50 hover:bg-red-900 text-red-400 hover:text-red-300 border border-red-700/50 px-4 py-2 rounded-lg text-sm font-semibold transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                            Log Keluar
                        </button>
                    </form>
                </div>
            </div>

            @if(session('success'))
            <div class="mb-6 bg-green-900/40 border border-green-500/50 text-green-400 px-4 py-3 rounded-lg flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <span>{{ session('success') }}</span>
            </div>
            @endif

            <div class="bg-zinc-900 rounded-2xl border border-white/5 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-zinc-800 border-b border-zinc-700 text-sm font-semibold text-gray-300 uppercase tracking-wider">
                                <th class="p-4 whitespace-nowrap">Tarikh Tempahan</th>
                                <th class="p-4 whitespace-nowrap">Pelanggan</th>
                                <th class="p-4 whitespace-nowrap">Servis & Harga</th>
                                <th class="p-4 whitespace-nowrap">Barber</th>
                                <th class="p-4 whitespace-nowrap">Tarikh & Masa Slot</th>
                                <th class="p-4 whitespace-nowrap">Status</th>
                                <th class="p-4 whitespace-nowrap text-right">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-300 divide-y divide-zinc-800">
                            @forelse($bookings as $booking)
                                <tr class="hover:bg-zinc-800/50 transition-colors">
                                    <td class="p-4 align-top">
                                        <div class="text-white">{{ $booking->created_at->format('d/m/Y') }}</div>
                                        <div class="text-xs text-gray-500">{{ $booking->created_at->format('h:i A') }}</div>
                                    </td>
                                    <td class="p-4 align-top">
                                        <div class="font-medium text-white text-base">{{ $booking->customer_name }}</div>
                                        <div class="text-sm text-gray-400 mt-1">{{ $booking->customer_phone }}</div>
                                        @if($booking->customer_email)
                                            <div class="text-xs text-gray-500 mt-1">{{ $booking->customer_email }}</div>
                                        @endif
                                    </td>
                                    <td class="p-4 align-top">
                                        <div class="text-white font-medium">{{ $booking->service_name }}</div>
                                        <div class="text-gold-500 font-bold mt-1">RM {{ $booking->total_price }}</div>
                                    </td>
                                    <td class="p-4 align-top">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-800 text-gray-300 border border-zinc-700">
                                            {{ $booking->barber_name }}
                                        </span>
                                    </td>
                                    <td class="p-4 align-top">
                                        <div class="text-white font-medium">{{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}</div>
                                        <div class="text-gold-500 font-bold mt-1">{{ $booking->booking_time }}</div>
                                    </td>
                                    <td class="p-4 align-top">
                                        <span class="px-2 py-1 {{ strtolower($booking->status) === 'selesai' ? 'bg-green-900/50 text-green-500 border-green-700/50' : 'bg-yellow-900/50 text-yellow-500 border-yellow-700/50' }} border rounded text-xs font-bold uppercase tracking-wider">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                    <td class="p-4 align-top text-right whitespace-nowrap">
                                        <div class="flex justify-end items-center gap-2">
                                            <a href="{{ route('admin.bookings.edit', $booking) }}" class="flex items-center justify-center w-8 h-8 bg-blue-600/20 hover:bg-blue-600/40 text-blue-500 border border-blue-600/50 rounded transition-colors shrink-0" title="Urus Tempahan">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </a>
                                            <a href="#" onclick="event.preventDefault(); if(confirm('Anda pasti mahu memadam tempahan ini?')) document.getElementById('delete-form-{{ $booking->id }}').submit();" class="flex items-center justify-center w-8 h-8 bg-red-600/20 hover:bg-red-600/40 text-red-500 border border-red-600/50 rounded transition-colors shrink-0 translate-y-[1px]" title="Padam Tempahan">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </a>
                                            <form id="delete-form-{{ $booking->id }}" action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" class="hidden">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-32 px-4 text-center text-gray-500">
                                        <svg class="mx-auto h-16 w-16 text-zinc-700 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                        <h3 class="text-lg font-medium text-white mb-1">Tiada Tempahan</h3>
                                        <p>Belum ada sebarang tempahan diterima daripada pelanggan setakat ini.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-layout>
