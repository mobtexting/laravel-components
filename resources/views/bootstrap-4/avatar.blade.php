@if ($url)
    <span {{ $attributes->merge(['class' => 'avatar']) }}
        style="background-image: url({{ $url }})">{!! $slot ?? null !!}
    </span>
@else
    <span {{ $attributes->merge(['class' => 'avatar']) }}>{{ $name }}</span>
@endif
