@push('styles')
    <link rel="stylesheet" href="/css/components/header.css">
@endpush

<h1 {{ $attributes->merge(['class' => 'header_style text-'.$textColor]) }}>
    {{ $text }}
</h1>