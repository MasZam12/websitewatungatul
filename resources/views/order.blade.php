@extends('layouts.app')

@section('title', 'Pesan Sekarang - Warung Atul')

@section('content')
    {{-- Order Page Header --}}
    <section class="pt-32 pb-12 px-[5%] bg-gradient-to-br from-[#FFF8F0] to-white">
        <div class="container mx-auto text-center">
            <div class="inline-block px-4 py-2 bg-[#6FAFA3]/10 rounded-full mb-4">
                <span class="text-[#6FAFA3] font-semibold text-sm">🛒 Pesan Online</span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold font-[Playfair_Display] text-[#2C3E50] mb-4">
                Pesan Menu Favorit Anda
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Pilih menu yang Anda inginkan dan lakukan pemesanan dengan mudah
            </p>
        </div>
    </section>

    {{-- Menu Categories --}}
    <section class="px-[5%] py-12 bg-white">
        <div class="container mx-auto">
            {{-- Category Tabs --}}
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button
                    class="px-6 py-3 bg-[#6FAFA3] text-white rounded-full font-semibold hover:bg-[#5A9B8F] transition-colors">
                    Semua Menu
                </button>
                <button
                    class="px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-[#6FAFA3] hover:text-white transition-colors">
                    Ayam
                </button>
                <button
                    class="px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-[#6FAFA3] hover:text-white transition-colors">
                    Bebek
                </button>
                <button
                    class="px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-[#6FAFA3] hover:text-white transition-colors">
                    Minuman
                </button>
            </div>

            {{-- Menu Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Sample Menu Items --}}
                @for ($i = 0; $i < 9; $i++)
                    <x-menu-card
                        image="img/{{ $i === 0 ? 'dominik-martin-JYFmYif4n70-unsplash.jpg' : 'charlesdeluvio-D-vDQMTfAAU-unsplash.jpg' }}"
                        title="{{ $i % 2 === 0 ? 'Ayam Goreng Tulang Lunak' : 'Bebek Goreng Tulang Lunak' }}"
                        description="Dimasak dengan bumbu rempah khas yang meresap hingga ke tulang"
                        price="Rp {{ $i % 2 === 0 ? '20.000' : '25.000' }}" />
                @endfor
            </div>
        </div>
    </section>

    {{-- Order Summary / Cart --}}
    <section class="px-[5%] py-12 bg-[#FFF8F0]">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold font-[Playfair_Display] text-[#2C3E50] mb-6">
                    Cara Pemesanan
                </h2>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center font-bold text-xl flex-shrink-0">
                            1
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#2C3E50] mb-2">Pilih Menu</h3>
                            <p class="text-gray-600">Pilih menu yang Anda inginkan dengan klik tombol (+) pada setiap menu
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center font-bold text-xl flex-shrink-0">
                            2
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#2C3E50] mb-2">Hubungi Kami</h3>
                            <p class="text-gray-600">Klik tombol WhatsApp di bawah untuk mengirim pesanan Anda</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center font-bold text-xl flex-shrink-0">
                            3
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#2C3E50] mb-2">Konfirmasi Pesanan</h3>
                            <p class="text-gray-600">Tim kami akan mengkonfirmasi pesanan dan waktu pengiriman</p>
                        </div>
                    </div>
                </div>

                {{-- WhatsApp Order Button --}}
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <a href="https://wa.me/6281234567890?text=Halo%20Warung%20Atul,%20saya%20ingin%20memesan:"
                        target="_blank"
                        class="w-full bg-[#25D366] text-white py-4 px-8 rounded-xl font-semibold hover:bg-[#20BA5A] transition-colors flex items-center justify-center gap-3 text-lg">
                        <i class="fab fa-whatsapp text-2xl"></i>
                        Pesan via WhatsApp
                    </a>
                    <p class="text-center text-gray-500 text-sm mt-4">
                        Atau hubungi kami di <span class="font-semibold text-[#6FAFA3]">0812-3456-7890</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection