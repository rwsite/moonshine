@props([
    'escape' => false,
    'raw' => false,
])
<div {{ $attributes->class(['form-hint']) }}>
    @if(! $escape)
        {!! $slot ?? '' !!}
    @elseif($raw)
        {!! $slot ?? '' !!}
    @else
        {{ $slot ?? '' }}
    @endif
</div>
