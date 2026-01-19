{{-- Stat Item Component --}}
@props([
    'value',
    'label'
])

<div {{ $attributes->merge(['class' => '']) }}>
    <div class="text-3xl font-bold text-[#6FAFA3]">{{ $value }}</div>
    <div class="text-sm text-gray-600">{{ $label }}</div>
</div>
