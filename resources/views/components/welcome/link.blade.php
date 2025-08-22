@props([
    'color' => 'light',
    'variant' => 'muted',
    'size' => 'bt-1',
    'href' => '#' // Valor predeterminado para href
])

<a href="{{ $href }}" class="{{ $variant ? 'btn btn-' . $variant : '' }} {{ $size ? 'btn-' . $size : '' }} text-{{ $color }}">
    {{ $slot }}
</a>
