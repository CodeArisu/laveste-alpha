@push('styles')
    <link rel="stylesheet" href="{{ asset('css/productpage/index.css') }}">
@endpush

<x-layout>

    @include('components.navbar')

    <div class='product_contents'>
        <div class='img_display'>
            <img src="https://images.smiletemplates.com/uploads/screenshots/155/0000155063/powerpoint-template-450w.jpg" alt="">
        </div>

        {{-- 
        Implement In-Navigation for 3 categories of products
        --}}
        <div class="product_selection_container">

            <ul>
                <li><x-header-component text='Gown' textColor='secondary' /></li>
                <li><x-header-component text='Filipiniana' textColor='secondary' /></li>
                <li><x-header-component text='Tuxedo' textColor='secondary' /></li>
                <li><x-header-component text='Barong' textColor='secondary' /></li>
            </ul>

            <div class='product_list'>
                <x-material.product-card />
                <x-material.product-card />
                <x-material.product-card />
                <x-material.product-card />
            </div>
            
        </div>
    </div>
    
</x-layout>
