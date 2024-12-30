@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/components/category-card.css') }}">
@endpush

<a href={{ $url }} {{ $attributes->merge(['class' => 'button_card']) }}>
    <div class='card_content'>
        <img src={{ $image }} alt="">
        <span>{{ $text }}</span>
    </div>
</a>