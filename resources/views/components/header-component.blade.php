@push('styles')
    <link rel="stylesheet" href="/css/components/header.css">
@endpush

<h1 {{ $attributes->merge(['class' => 'header_style ' . (is_string($textColor) ? $textColor : '')]) }}>
    {{ $text }}
</h1>