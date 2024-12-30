@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/homepage/index.css') }}">
@endpush

<x-layout>
    
    <section class='hero_section'>
        @include('static.homepage.hero')
    </section>

    <section class='category_section'>
        @include('static.homepage.category')
    </section>

    <section class='appointment_section'>
        @include('static.homepage.appointment')
    </section>

    <section class='howitworks_section'>
        @include('static.homepage.howitworks')
    </section>
    
    <section class="aboutus_section">
        @include('static.homepage.aboutus')
    </section>

</x-layout>