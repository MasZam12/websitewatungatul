<footer class="relative bg-[#2C3E50] text-white py-16">
    <!-- Decorative Top Border -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#6FAFA3] via-[#E8956F] to-[#D4AF37]"></div>

    <div class="container mx-auto px-[5%]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-8">
            <!-- About -->
            <div>
                <h3 class="text-2xl font-bold font-[Lobster_Two] text-[#6FAFA3] mb-4">Warung Atul</h3>
                <p class="text-gray-300 leading-relaxed">
                    Spesialis Ayam & Bebek Tulang Lunak dengan cita rasa khas yang menggugah selera.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-[#6FAFA3]">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-gray-300 hover:text-[#6FAFA3] transition-colors">Home</a></li>
                    <li><a href="#produk" class="text-gray-300 hover:text-[#6FAFA3] transition-colors">Menu</a></li>
                    <li><a href="#about" class="text-gray-300 hover:text-[#6FAFA3] transition-colors">Tentang Kami</a>
                    </li>
                    <li><a href="#contact" class="text-gray-300 hover:text-[#6FAFA3] transition-colors">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-[#6FAFA3]">Hubungi Kami</h4>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-center gap-2">
                        <i data-feather="map-pin" class="w-4 h-4 text-[#6FAFA3]"></i>
                        <span>Lokasi Warung Atul</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-feather="phone" class="w-4 h-4 text-[#6FAFA3]"></i>
                        <span>+62 xxx xxxx xxxx</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-feather="clock" class="w-4 h-4 text-[#6FAFA3]"></i>
                        <span>Buka Setiap Hari 10:00 - 22:00</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 pt-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} Warung Atul. All Rights Reserved.</p>
        </div>
    </div>
</footer>