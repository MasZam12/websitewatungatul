{{-- Review Card Component --}}
@props([
    'rating' => 4.8,
    'review',
    'customerName' => 'Pelanggan Setia',
    'customerImage',
    'verified' => true
])

<div {{ $attributes->merge(['class' => 'min-w-[400px] bg-white p-8 rounded-2xl shadow-lg border-2 border-gray-100 hover:border-[#6FAFA3] transition-all duration-300']) }}>
    {{-- Rating --}}
<div class="flex items-center gap-2 mb-4">
        @for ($i = 0; $i < 5; $i++)
            <span class="text-[#D4AF37] text-xl">★</span>
        @endfor
        <span class="text-[#6FAFA3] font-bold text-lg ml-2">{{ $rating }}</span>
</div>
    
    {{-- Review Text --}}
    <p class="text-gray-700 leading-relaxed mb-6 italic">
       "{{ $review }}"
    </p>
    
    {{-- Customer Info --}}
    <div class="flex items-center gap-4">
        <img src="{{ asset($customerImage) }}" alt="{{ $customerName }}" 
             class="w-12 h-12 rounded-full object-cover border-2 border-[#6FAFA3]" />
        <div>
            <div class="font-semibold text-[#2C3E50]">{{ $customerName }}</div>
            @if($verified)
                <div class="text-sm text-gray-500">Verified Customer</div>
            @endif
        </div>
    </div>
</div>
