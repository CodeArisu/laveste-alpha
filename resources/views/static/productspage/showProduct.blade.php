@push('styles')
    <link rel="stylesheet" href="{{ asset('css/productpage/showProduct.css') }}">
@endpush

<x-layout>
    {{-- asset components --}}
    @include('components.navbar')
    <x-back-button />

    <div class="show_product_container">
        <div class='show_product_info'>

            {{-- image contained on the left --}}
            <div class="img_content">
                <img src="https://picsum.photos/200/300?grayscale" alt="">
            </div>

            {{-- item data contained on the right --}}
            <div class="content">
                <div class="text_content">
                    <x-heading 
                        text='Lorem ipsum dolor sit.' 
                        textColor='secondary' 
                    />
                    <span>P 0</span>
                </div>
                <div class="text_content">
                    <span>Size</span>
                    <div class='size'>
                        Lorem, ipsum.
                    </div>
                </div>
                <div class="text_content">
                    <span>Details</span>
                    <div>
                        <span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur placeat quo, sed
                            deserunt veritatis necessitatibus voluptate. Amet modi, laborum, iusto harum sapiente ipsam
                            quae vero explicabo aliquid obcaecati ab fugit?
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- 
            input contained form for renting feature
         --}}
        <div class='show_product_content'>

        </div>
    </div>
</x-layout>
