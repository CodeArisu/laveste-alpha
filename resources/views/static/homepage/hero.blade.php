@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/homepage/hero.css') }}">
@endpush

<div class="hero">
    <div class="hero_container">

        <img 
        src="https://images8.alphacoders.com/113/1134890.jpg" 
        alt="cover-page.jpg"
        >
        
        <div class="header_container">
            <div class='text-content'>
                <h1 class="header">La Veste Rentals</h1>
                <p class="subheader">Explore our seamless process, book an appointment for a fitting, and choose between
                    door-to-door delivery or shop pick-up. Style has never been this accessible—start your journey today!
                </p>
                <x-button btnType='primary' btnTitle='Start Now' class='btn-sm'/>
            </div>
        </div>
    </div>
</div>
