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
                <li>
                    <x-heading text='Gown' textColor='secondary'/>
                </li>
                <li>
                    <x-heading text='Filipiniana' textColor='secondary'/>
                </li>
                <li>
                    <x-heading text='Tuxedo' textColor='secondary'/>
                </li>
                <li>
                    <x-heading text='Barong' textColor='secondary'/>
                </li>
            </ul>

            <div class='product_list'>
                
                {{-- Example Product Card Template --}}
                <x-product-card 
                    :product="[
                        'name' => 'Gown 1',
                        'price' => 1000.00,
                        'image' => 'https://picsum.photos/200/300?grayscale'
                    ]"
                />
                
            </div>
            
        </div>
    </div>

    @include('components.footer')
    
</x-layout>
