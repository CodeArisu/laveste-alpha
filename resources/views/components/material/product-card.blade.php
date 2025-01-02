@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/product-card.css') }}">
@endpush

<a href='{{ route('products.show') }}' class='card_container'>
    <div class="card_contents card_shadow">
        <div class='img_container'>
            <img src="https://picsum.photos/200/300?grayscale" alt="">
        </div>
        <div class='card_text'>
            <h3>Product Name</h3>
            <p class='price_tag'>Price: $0.00</p>
        </div>
    </div>
</a>