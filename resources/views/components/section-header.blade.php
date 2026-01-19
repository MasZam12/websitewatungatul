{{-- Section Header Component --}}
@props([
    'badge',
    'title',
    'description' => null
])

<div {{ $attributes->merge(['class' => 'text-center reveal mb-16']) }}>
    <div class="inline-block px-4 py-2 bg-[#6FAFA3]/10 rounded-full mb-4">
        <span class="text-[#6FAFA3] font-semibold text-sm">{{ $badge }}</span>
    </div>
    <h2 class="section-title">{{ $title }}</h2>
    @if($description)
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        {{ $description }}
    </p>
    @endif
</div>
