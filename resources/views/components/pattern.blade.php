@props([
    'orientation' => 'vertical', // Default orientation: vertical
    'width' => 'auto', // Default width
    'height' => 'auto', // Default height
    'position' => '', // Positioning, e.g., -ml-20
])

<div {{ $attributes->merge(['class' => 'flex justify-center items-center']) }}>
    <img src="{{ asset('images/pattern.png') }}" alt="Pattern"
        class="{{ $orientation === 'horizontal' ? '-rotate-90' : '' }} 
               {{ $width === 'full' ? 'w-full' : 'w-auto' }}
               {{ $height === 'full' ? 'h-full' : ($height === 'screen' ? 'h-screen' : 'h-auto') }}
               {{ $position }}">
</div>
