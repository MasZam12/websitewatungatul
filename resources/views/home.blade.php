@extends('layouts.app')

@section('title', 'Warung Atul - Spesialis Ayam & Bebek Tulang Lunak')

@section('content')
    {{-- Hero Section --}}
    <section
        class="home relative px-[5%] pt-32 pb-20 min-h-screen bg-gradient-to-br from-[#FFF8F0] to-white overflow-hidden"
        id="home">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
                {{-- Text Content --}}
                <div class="text reveal">
                    <div class="inline-block px-4 py-2 bg-[#6FAFA3]/10 rounded-full mb-6">
                        <span class="text-[#6FAFA3] font-semibold text-sm">🍗 Spesialis Tulang Lunak</span>
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold font-[Playfair_Display] text-[#2C3E50] leading-tight mb-6">
                        Cita Rasa <span class="text-[#6FAFA3]">Autentik</span><br />
                        Ayam & Bebek Tulang Lunak
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8 max-w-xl">
                        Nikmati kelezatan ayam dan bebek tulang lunak dengan bumbu khas yang menggugah selera.
                        Sempurna untuk dinikmati bersama keluarga dengan harga terjangkau.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#produk" class="btn-primary">
                            <i data-feather="book-open" class="w-5 h-5 inline mr-2"></i>
                            Lihat Menu
                        </a>
                        <a href="#contact" class="btn-secondary">
                            <i data-feather="phone" class="w-5 h-5 inline mr-2"></i>
                            Pesan Sekarang
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-gray-200">
                        <x-stat-item value="10+" label="Tahun Pengalaman" />
                        <x-stat-item value="50+" label="Menu Pilihan" />
                        <x-stat-item value="4.8" label="Rating Pelanggan" />
                    </div>
                </div>

                {{-- Image --}}
                <div class="image reveal relative">
                    <div class="relative z-10">
                        <img src="{{ asset('img/ayam-removebg-preview.png') }}" alt="Ayam Tulang Lunak"
                            class="w-full max-w-[600px] h-auto drop-shadow-2xl animate-float mx-auto" />
                    </div>
                    {{-- Decorative Elements --}}
                    <div class="absolute top-10 right-10 w-72 h-72 bg-[#6FAFA3]/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute bottom-10 left-10 w-64 h-64 bg-[#E8956F]/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Menu Section --}}
    <section class="produk px-[5%] py-20 bg-white" id="produk">
        <div class="container mx-auto">
            {{-- Section Header --}}
            <x-section-header badge="Menu Kami" title="Menu Andalan Warung Atul"
                description="Pilihan menu terbaik dengan cita rasa yang menggugah selera" />

            {{-- Menu Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <x-menu-card image="img/dominik-martin-JYFmYif4n70-unsplash.jpg" title="Ayam Goreng Tulang Lunak"
                    description="Ayam goreng dengan bumbu khas yang meresap hingga ke tulang" price="Rp 20.000" />

                @for ($i = 0; $i < 3; $i++)
                    <x-menu-card image="img/charlesdeluvio-D-vDQMTfAAU-unsplash.jpg" title="Ayam Goreng Tulang Lunak"
                        description="Ayam goreng dengan bumbu khas yang meresap hingga ke tulang" price="Rp 20.000" />
                @endfor

                @for ($i = 0; $i < 4; $i++)
                    <x-menu-card image="img/charlesdeluvio-D-vDQMTfAAU-unsplash.jpg" title="Bebek Goreng Tulang Lunak"
                        description="Bebek goreng dengan bumbu rempah yang kaya rasa" price="Rp 25.000" :hidden="true" />
                @endfor
            </div>

            {{-- Order Now Button --}}
            <div class="text-center mt-12">
                <a href="{{ route('order') }}"
                    class="inline-flex items-center px-10 py-4 bg-[#6FAFA3] text-white rounded-full font-semibold hover:bg-[#5A9B8F] transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <i data-feather="shopping-cart" class="w-5 h-5 mr-2"></i>
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="about px-[5%] py-20 bg-[#FFF8F0]" id="about">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
                {{-- Image --}}
                <div class="image reveal order-2 lg:order-1">
                    <div class="relative">
                        <img src="{{ asset('img/WARUNG ATUL.png') }}" alt="Warung Atul"
                            class="w-full rounded-3xl shadow-2xl" />
                        <div class="absolute -bottom-6 -right-6 w-full h-full border-4 border-[#6FAFA3] rounded-3xl -z-10">
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="content reveal order-1 lg:order-2">
                    <div class="inline-block px-4 py-2 bg-[#6FAFA3]/10 rounded-full mb-4">
                        <span class="text-[#6FAFA3] font-semibold text-sm">Tentang Kami</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold font-[Playfair_Display] text-[#2C3E50] mb-6">
                        Warung Atul
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Warung Atul telah melayani pelanggan setia dengan hidangan ayam dan bebek tulang lunak
                        berkualitas sejak lebih dari 10 tahun yang lalu. Kami berkomitmen untuk menyajikan
                        makanan dengan cita rasa autentik dan bumbu rempah pilihan.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Setiap hidangan kami dibuat dengan penuh perhatian dan menggunakan bahan-bahan segar
                        untuk memastikan kualitas terbaik bagi pelanggan kami.
                    </p>

                    {{-- Features --}}
                    <div class="space-y-4">
                        <x-feature-item icon="check" title="Bahan Segar Berkualitas"
                            description="Menggunakan bahan pilihan yang segar setiap hari" />
                        <x-feature-item icon="check" title="Bumbu Rempah Khas"
                            description="Resep turun temurun dengan bumbu yang meresap sempurna" />
                        <x-feature-item icon="check" title="Harga Terjangkau"
                            description="Kualitas premium dengan harga yang ramah di kantong" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Reviews Section --}}
    <section class="review px-[5%] py-20 bg-white" id="review">
        <div class="container mx-auto">
            {{-- Section Header --}}
            <x-section-header badge="Testimoni" title="Apa Kata Pelanggan Kami"
                description="Kepuasan pelanggan adalah prioritas kami" />

            {{-- Reviews Carousel --}}
            <div class="row reveal overflow-hidden">
                <div class="carousel-track flex gap-6 animate-[scroll_40s_linear_infinite] hover:pause">
                    @for ($i = 0; $i < 10; $i++)
                        <x-review-card rating="4.8"
                            review="Ini enakk bgtt! SOP nya seger, bebeknya juga enak semuanya enak. Pertama kali order pasti akan balik lagi kesini! ♥️"
                            customerName="Pelanggan Setia" customerImage="img/WARUNG ATUL (4).png" :verified="true" />
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="contact px-[5%] py-20 bg-[#6FAFA3]" id="contact">
        <div class="container mx-auto">
            {{-- Section Header --}}
            <div class="text-center reveal mb-16">
                <div class="inline-block px-4 py-2 bg-white/20 rounded-full mb-4">
                    <span class="text-white font-semibold text-sm">Hubungi Kami</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold font-[Playfair_Display] text-white mb-4">
                    Kunjungi Warung Atul
                </h2>
                <p class="text-white/90 text-lg max-w-2xl mx-auto">
                    Kami siap melayani Anda dengan hidangan terbaik
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Map --}}
                <div class="maps reveal">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.469819590594!2d107.34441577499135!3d-6.3331283936565015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977d514230505%3A0xc77808037c96b153!2sWarung%20Atul!5e0!3m2!1sid!2sid!4v1734439995077!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-[400px] rounded-2xl shadow-2xl">
                    </iframe>
                </div>

                {{-- Contact Form --}}
                <div class="input reveal bg-white rounded-2xl p-8 shadow-2xl">
                    <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Kirim Pesan</h3>

                    <form action="" class="space-y-4">
                        <div>
                            <input type="text" placeholder="Nama Anda"
                                class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-[#6FAFA3] focus:outline-none transition-colors" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email"
                                class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-[#6FAFA3] focus:outline-none transition-colors" />
                        </div>
                        <div>
                            <input type="tel" placeholder="No. Telepon"
                                class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-[#6FAFA3] focus:outline-none transition-colors" />
                        </div>
                        <div>
                            <textarea placeholder="Pesan Anda" rows="4"
                                class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:border-[#6FAFA3] focus:outline-none transition-colors resize-none"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#6FAFA3] text-white py-4 rounded-xl font-semibold hover:bg-[#5A9B8F] transition-colors">
                            Kirim Pesan
                        </button>
                    </form>

                    {{-- Social Media --}}
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <p class="text-center text-gray-600 mb-4">Atau hubungi kami melalui:</p>
                        <div class="flex justify-center gap-4">
                            <a href="https://www.facebook.com/yourprofile" target="_blank"
                                class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center hover:bg-[#5A9B8F] transition-colors">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            <a href="https://www.instagram.com/yourprofile" target="_blank"
                                class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center hover:bg-[#5A9B8F] transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://wa.me/yourprofile" target="_blank"
                                class="w-12 h-12 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center hover:bg-[#5A9B8F] transition-colors">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection