{{-- Feature Item Component --}}
@props([
    'icon' => 'check',
    'title',
    'description'
])

<div {{ $attributes->merge(['class' => 'flex items-start gap-4']) }}>
    <div class="w-12 h-12 bg-[#6FAFA3] rounded-full flex items-center justify-center flex-shrink-0">
        <i data-feather="{{ $icon }}" class="w-6 h-6 text-white"></i>
    </div>
    <div>
        <h4 class="font-semibold text-[#2C3E50] mb-1">{{ $title }}</h4>
        <p class="text-gray-600">{{ $description }}</p>
    </div>
</div>
