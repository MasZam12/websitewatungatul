{{-- Menu Card Component --}}
@props([
    'image',
    'title',
    'description',
    'price',
    'hidden' => false
])

<div {{ $attributes->merge(['class' => 'card-restaurant reveal group ' . ($hidden ? 'menu-card-hidden' : '')]) }}>
    <div class="food-image-hover mb-4">
        <img src="{{ asset($image) }}" 
             alt="{{ $title }}" 
             class="w-full h-64 object-cover rounded-xl" />
    </div>
    <div class="p-6">
        <h3 class="text-xl font-bold text-[#2C3E50] mb-2 group-hover:text-[#6FAFA3] transition-colors">
            {{ $title }}
        </h3>

                       <p class="text-gray-600 text-sm mb-4">
            {{ $description }}
        </p>
        <div class="flex items-center justify-between">
            <div class="text-2xl font-bold text-[#E8956F]">{{ $price }}</div>
            <button class="w-10 h-10 bg-[#6FAFA3] text-white rounded-full flex items-center justify-center hover:bg-[#5A9B8F] transition-colors">
                <i data-feather="plus" class="w-5 h-5"></i>
            </button>
        </div>
    </div>
</div>
