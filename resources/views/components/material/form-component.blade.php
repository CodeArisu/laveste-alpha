@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/form.css') }}">
@endpush

<div>
    <x-heading text='Checkout' textColor='secondary' />
    <form action="" class='form_container'>
        @csrf
        <div class='left_panel'>
            <x-heading text='Transaction Details' textColor='secondary' />
            <x-textfield label='Full Name' placeholder='Full Name' />
            <x-textfield label='Address' placeholder='Address' />
            <x-textfield label='Phone Number' placeholder='0-xxxx' />
        </div>

        <div class='right_panel'>
            <x-heading text='Order' textColor='secondary' />

            <div class='item_prev'>
                <img src="" alt="">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                
            </div>
        </div>

    </form>
</div>
