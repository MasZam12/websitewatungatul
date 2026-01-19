@extends('layouts.app')

@section('title', 'Warung Atul - Spesialis Ayam & Bebek Tulang Lunak')

@section('content')
    {{-- Hero Section --}}
    <section
        class="home relative px-[10%] pt-32 pb-16 min-h-screen gradient-hero overflow-hidden grid grid-cols-1 md:grid-cols-2 items-center gap-16"
        id="home">
        {{-- Decorative Circles --}}
        <div class="absolute w-[500px] h-[500px] bg-white/10 rounded-full -top-24 -right-24 animate-float"></div>
        <div class="absolute w-[300px] h-[300px] bg-white/5 rounded-full -bottom-12 -left-12 animate-float"
            style="animation-direction: reverse; animation-duration: 8s;"></div>

        {{-- Text Content --}}
        <div class="text reveal max-w-[600px] relative z-10">
            <h2 class="typing-effect text-5xl md:text-6xl font-extrabold font-[Raleway] text-white drop-shadow-lg">Spesialis
            </h2>
            <h3 class="text-4xl md:text-5xl font-bold font-[Raleway] text-white pt-2.5 pb-2.5 drop-shadow-lg">
                Ayam & Bebek <span
                    class="bg-gradient-to-r from-[#FFB800] to-[#FFF200] bg-clip-text text-transparent font-black">Tulang
                    Lunak</span>
            </h3>
            <p class="font-sans font-normal text-lg text-white/95 pb-8 leading-relaxed drop-shadow-sm">
                Warung Atul menyajikan ayam dan bebek tulang lunak yang dibumbui
                dengan bumbu-bumbu khas yang menggugah selera hingga ke tulang.
                Ciptakan momen makan berkesan-mu sekarang dengan harga yang
                terjangkau. Sempurna dinikmati bersama keluarga maupun teman!
            </p>
            <div class="button reveal flex gap-6">
                <button
                    class="to-menu relative overflow-hidden gradient-accent text-white text-base font-semibold font-sans px-8 py-4 rounded-full h-14 transition-all duration-300 shadow-lg hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(0,217,192,0.4)] before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-0 before:h-0 before:rounded-full before:bg-white/30 before:-translate-x-1/2 before:-translate-y-1/2 before:transition-all before:duration-500 hover:before:w-[300px] hover:before:h-[300px]">
                    Lihat Menu
                </button>
                <button
                    class="to-order relative overflow-hidden bg-white text-[#FF6B35] text-base font-semibold font-sans px-8 py-4 rounded-full h-14 border-2 border-transparent transition-all duration-300 shadow-lg hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(255,255,255,0.4)] hover:border-white/50 before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:w-0 before:h-0 before:rounded-full before:bg-white/30 before:-translate-x-1/2 before:-translate-y-1/2 before:transition-all before:duration-500 hover:before:w-[300px] hover:before:h-[300px]">
                    Pesan Sekarang
                </button>
            </div>
        </div>

        {{-- Image --}}
        <div class="image reveal text-center relative z-10">
            <img src="{{ asset('img/ayam-removebg-preview.png') }}" alt="Ayam Tulang Lunak"
                class="w-full max-w-[500px] h-auto drop-shadow-[0_20px_40px_rgba(0,0,0,0.3)] animate-float mx-auto" />
        </div>
    </section>

    {{-- Product Section --}}
    <section class="produk px-[3%] py-24 min-h-screen bg-gradient-to-b from-gray-50 to-white" id="produk">
        <div class="text reveal flex justify-center mb-12">
            <h2
                class="relative font-[Raleway] text-4xl font-extrabold px-2.5 py-2.5 text-center gradient-text after:content-[''] after:absolute after:-bottom-2.5 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1 after:gradient-primary after:rounded-sm">
                Menu Andalan Warung Atul
            </h2>
        </div>

        <div class="row flex flex-wrap mt-16 justify-center gap-8">
            @for ($i = 0; $i < 4; $i++)
                <div
                    class="menu-card reveal text-center bg-white/90 backdrop-blur-sm rounded-3xl p-6 font-sans shadow-md border border-white/50 transition-all duration-300 hover:-translate-y-2.5 hover:scale-[1.02] hover:shadow-[0_12px_40px_rgba(255,107,53,0.3)] relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:gradient-primary before:scale-x-0 before:transition-transform before:duration-300 hover:before:scale-x-100">
                    <img src="{{ asset('img/' . ($i === 0 ? 'dominik-martin-JYFmYif4n70-unsplash.jpg' : 'charlesdeluvio-D-vDQMTfAAU-unsplash.jpg')) }}"
                        alt="Ayam Goreng"
                        class="menu-card-img w-[300px] h-[250px] object-cover rounded-2xl transition-transform duration-500 hover:scale-110" />
                    <h3 class="menu-card-title text-xl font-bold mt-4 text-gray-800">Ayam Goreng</h3>
                    <p class="menu-card-price text-lg font-bold text-[#FF6B35] my-2">IDR 20.000</p>
                    <button
                        class="button gradient-primary text-white text-base font-semibold px-10 py-3 rounded-full font-sans cursor-pointer mt-4 mb-2.5 border-none transition-all duration-300 shadow-sm hover:scale-105 hover:shadow-[0_8px_24px_rgba(255,107,53,0.4)]">
                        Beli
                    </button>
                </div>
            @endfor

            @for ($i = 0; $i < 4; $i++)
                <div
                    class="menu-card-hidden reveal text-center bg-white/90 backdrop-blur-sm rounded-3xl p-6 font-sans shadow-md border border-white/50 transition-all duration-300 hover:-translate-y-2.5 hover:scale-[1.02] hover:shadow-[0_12px_40px_rgba(255,107,53,0.3)] relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:gradient-primary before:scale-x-0 before:transition-transform before:duration-300 hover:before:scale-x-100">
                    <img src="{{ asset('img/charlesdeluvio-D-vDQMTfAAU-unsplash.jpg') }}" alt="Ayam Goreng"
                        class="menu-card-img w-[300px] h-[250px] object-cover rounded-2xl transition-transform duration-500 hover:scale-110" />
                    <h3 class="menu-card-title text-xl font-bold mt-4 text-gray-800">Ayam Goreng</h3>
                    <p class="menu-card-price text-lg font-bold text-[#FF6B35] my-2">IDR 20.000</p>
                    <button
                        class="button gradient-primary text-white text-base font-semibold px-10 py-3 rounded-full font-sans cursor-pointer mt-4 mb-2.5 border-none transition-all duration-300 shadow-sm hover:scale-105 hover:shadow-[0_8px_24px_rgba(255,107,53,0.4)]">
                        Beli
                    </button>
                </div>
            @endfor
        </div>

        <div class="see-more-container flex justify-center mt-12 w-full">
            <button id="seeMoreBtn"
                class="see_more reveal font-sans gradient-purple text-white px-10 py-4 border-none rounded-full cursor-pointer text-base font-semibold transition-all duration-300 shadow-md hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(108,92,231,0.4)]">
                See More
            </button>
        </div>
    </section>

    {{-- About Section --}}
    <section class="about px-[3%] py-24 min-h-screen bg-gradient-to-br from-gray-100 to-gray-300" id="about">
        <div class="text reveal flex justify-center mb-12">
            <h2
                class="font-[Raleway] text-4xl font-extrabold px-2.5 py-2.5 text-center gradient-purple bg-clip-text text-transparent">
                Tentang Kami
            </h2>
        </div>

        <div class="row flex justify-between items-center gap-16 mt-12 flex-col md:flex-row">
            <div
                class="image reveal flex-1 relative before:content-[''] before:absolute before:inset-[-10px] before:gradient-primary before:rounded-3xl before:-z-10 before:opacity-30">
                <img src="{{ asset('img/WARUNG ATUL.png') }}" alt="Warung Atul"
                    class="w-full max-w-[600px] h-auto rounded-3xl shadow-lg transition-transform duration-500 hover:scale-[1.02]" />
            </div>

            <div class="content reveal flex-1 glassmorphism p-12 rounded-3xl shadow-md">
                <h3 class="font-[Raleway] text-4xl font-bold text-gray-800 mb-4">Warung Atul</h3>
                <p class="font-sans text-lg leading-relaxed text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis deserunt minus quia sunt a sapiente ipsam, sed
                    voluptate quaerat inventore magnam, asperiores soluta eligendi?
                    Unde quos dolorum quae magni sapiente!
                </p>
            </div>
        </div>
    </section>

    {{-- Review Section --}}
    <section class="review px-[3%] py-24 min-h-screen bg-white" id="review">
        <div class="text reveal flex justify-center mb-12">
            <h2
                class="font-[Raleway] text-4xl font-extrabold px-2.5 py-2.5 text-center gradient-accent bg-clip-text text-transparent">
                Rating dan Ulasan
            </h2>
        </div>

        <div class="row reveal flex overflow-hidden w-full relative pt-12">
            <div class="carousel-track flex gap-8 animate-[scroll_30s_linear_infinite] hover:pause"
                style="width: calc(100% * 10);">
                @for ($i = 0; $i < 10; $i++)
                    <div
                        class="card min-w-[400px] h-80 p-8 bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-md text-center border-2 border-transparent transition-all duration-300 hover:-translate-y-2.5 hover:border-[#00D9C0] hover:shadow-[0_12px_40px_rgba(0,217,192,0.3)] relative overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-1 before:gradient-accent before:scale-x-0 before:transition-transform before:duration-300 hover:before:scale-x-100">
                        <img src="{{ asset('img/WARUNG ATUL (4).png') }}" alt="Review"
                            class="w-20 h-20 rounded-full object-cover border-4 border-[#00D9C0] mb-4 mx-auto" />

                        <div class="rating-container flex flex-row items-center justify-center gap-2.5 my-4">
                            <div class="rating-value text-3xl font-extrabold gradient-accent bg-clip-text text-transparent">4.8
                            </div>
                            <div class="rating flex gap-1">
                                @for ($j = 0; $j < 5; $j++)
                                    <span class="star text-2xl text-[#FFB800] animate-[starPulse_2s_ease-in-out_infinite]">★</span>
                                @endfor
                            </div>
                        </div>

                        <p class="font-sans font-normal italic text-center text-gray-600 leading-relaxed pt-2.5">
                            "ini enakk bgtt,SOP nya seger,bebeknya juga enak semuanya enak
                            pertama kali order pasti akan balik lagi kesiniiiii♥️"
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="contact px-[3%] py-24 gradient-purple relative" id="contact">
        <div class="text reveal flex justify-center mb-12">
            <h2 class="font-[Raleway] text-4xl font-extrabold px-2.5 py-2.5 text-center text-white drop-shadow-lg">
                Kontak Kami
            </h2>
        </div>

        <div class="row reveal flex mt-8 gap-12 flex-col md:flex-row">
            <div class="maps flex-1 flex items-center justify-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.469819590594!2d107.34441577499135!3d-6.3331283936565015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977d514230505%3A0xc77808037c96b153!2sWarung%20Atul!5e0!3m2!1sid!2sid!4v1734439995077!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full max-w-[600px] h-[500px] rounded-3xl shadow-lg border-4 border-white/30">
                </iframe>
            </div>

            <div class="input flex-1 flex justify-center items-center flex-col glassmorphism p-12 rounded-3xl shadow-lg">
                <h3 class="font-[Raleway] text-3xl font-bold text-gray-800 mb-8">Hubungi Kami</h3>

                <form action="" class="w-full">
                    <div
                        class="input-grup flex items-center border-2 border-gray-300 mt-5 px-6 py-4 w-full max-w-[500px] bg-white gap-2.5 rounded-full transition-all duration-300 focus-within:border-[#6C5CE7] focus-within:shadow-[0_0_0_4px_rgba(108,92,231,0.1)] focus-within:-translate-y-0.5">
                        <i data-feather="user" class="text-gray-600 transition-colors duration-200"></i>
                        <input type="text" placeholder="Nama"
                            class="w-full h-5 bg-transparent text-gray-800 font-sans text-base placeholder:text-gray-600 border-none focus:outline-none" />
                    </div>
                    <div
                        class="input-grup flex items-center border-2 border-gray-300 mt-5 px-6 py-4 w-full max-w-[500px] bg-white gap-2.5 rounded-full transition-all duration-300 focus-within:border-[#6C5CE7] focus-within:shadow-[0_0_0_4px_rgba(108,92,231,0.1)] focus-within:-translate-y-0.5">
                        <i data-feather="mail" class="text-gray-600 transition-colors duration-200"></i>
                        <input type="text" placeholder="Email"
                            class="w-full h-5 bg-transparent text-gray-800 font-sans text-base placeholder:text-gray-600 border-none focus:outline-none" />
                    </div>
                    <div
                        class="input-grup flex items-center border-2 border-gray-300 mt-5 px-6 py-4 w-full max-w-[500px] bg-white gap-2.5 rounded-full transition-all duration-300 focus-within:border-[#6C5CE7] focus-within:shadow-[0_0_0_4px_rgba(108,92,231,0.1)] focus-within:-translate-y-0.5">
                        <i data-feather="phone" class="text-gray-600 transition-colors duration-200"></i>
                        <input type="text" placeholder="Phone"
                            class="w-full h-5 bg-transparent text-gray-800 font-sans text-base placeholder:text-gray-600 border-none focus:outline-none" />
                    </div>
                </form>

                <div class="sosmed flex items-center justify-center gap-8 px-5 my-8">
                    <a href="https://www.facebook.com/yourprofile" target="_blank" title="Facebook"
                        class="w-15 h-15 flex items-center justify-center rounded-full gradient-primary transition-all duration-300 shadow-sm hover:-translate-y-1 hover:scale-110 hover:shadow-[0_12px_32px_rgba(255,107,53,0.4)]">
                        <i class="fab fa-facebook text-2xl text-white"></i>
                    </a>
                    <a href="https://www.instagram.com/yourprofile" target="_blank" title="Instagram"
                        class="w-15 h-15 flex items-center justify-center rounded-full gradient-primary transition-all duration-300 shadow-sm hover:-translate-y-1 hover:scale-110 hover:shadow-[0_12px_32px_rgba(255,107,53,0.4)]">
                        <i class="fab fa-instagram text-2xl text-white"></i>
                    </a>
                    <a href="https://www.twitter.com/yourprofile" target="_blank" title="Twitter"
                        class="w-15 h-15 flex items-center justify-center rounded-full gradient-primary transition-all duration-300 shadow-sm hover:-translate-y-1 hover:scale-110 hover:shadow-[0_12px_32px_rgba(255,107,53,0.4)]">
                        <i class="fab fa-whatsapp text-2xl text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection