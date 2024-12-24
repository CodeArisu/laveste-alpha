@push('styles')
    <link href="{{ asset('/css/homepage/hero.css') }}" rel="stylesheet">
@endpush

<div class="hero">
    <div class="hero_container">
        <div class="header_container">
            <h1 class="header">La Veste Rentals</h1>
            <p class="subheader">Explore our seamless process, book an appointment for a fitting, and choose between
                door-to-door delivery or shop pick-up. Style has never been this accessible—start your journey today!
            </p>
            <x-button-component btnType='primary' btnTitle='Start Now'/>
        </div>
    </div>
</div>
