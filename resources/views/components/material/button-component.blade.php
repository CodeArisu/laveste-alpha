@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/button.css') }}">
@endpush

@props([
    'url' => '#',
])

<a {{ $attributes->merge(['class' => $btnType . " btn "]) }} href="{{ $url }}">
    <span>{{ $btnTitle }}</span>
</a>