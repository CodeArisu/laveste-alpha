@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/homepage/appointment.css') }}">
@endpush


    <div class='appointment_content'>
        <div class='img-content'>
            <img src="https://cdn.shopify.com/s/files/1/0015/2282/7330/files/786991F9-E025-4325-8FC7-892217B56417_6717ca0b-c0a6-45b1-9989-dffbc18e3de7.jpg?v=1668768205" alt="vestido-shop.jpeg">
        </div>
        <div class='text-content'>
            <x-header-component text='Book an Appointment Now!' textColor='secondary'/>
            <p>
                Our appointment service allows you to schedule a one-on-one fitting with our experienced team. Choose a
                convenient date and time, share a few details about your preferences and measurements, and we’ll have
                everything ready for your visit
            </p>
            <x-button-component btnType='secondary' btnTitle='Book Now!' class='btn-xsm'/>
        </div>
    </div>

