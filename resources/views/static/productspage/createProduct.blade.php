@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/textfield.css') }}">

@endpush

<x-layout>

    <x-back-button/>

    <div class='form'>
        <x-textfield label='test field' placeholder='field' />
        <x-radio-btn placeholder='Delivery' />
    </div>
 
</x-layout>
