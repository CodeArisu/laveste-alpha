@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/product-card.css') }}">
@endpush

@props([
    'product' => [
        'name' => 'Default Product Name',
        'price' => 0.00,
        'image' => 'https://picsum.photos/200/300?grayscale'
    ], 
    'url' => route('products.show')
])

<a href='{{ $url }}' class='card_container'>
    <div class="card_contents card_shadow">
        <div class='img_container'>
            <img src={{ $product['image'] }} alt="">
        </div>
        <div class='card_text'>
            <h3>{{ $product['name'] }}</h3>
            <p class='price_tag'>Price: {{ $product['price'] }}</p>
        </div>
    </div>
</a>