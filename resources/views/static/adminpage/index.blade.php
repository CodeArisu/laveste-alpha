@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/adminpage/index.css') }}">
@endpush

<x-layout>

    <header>
        <x-header-component text='Dashboard' textColor='secondary' />
    </header>

    <div class='card_holder'>
        <x-material.stat-card icon='fa-solid fa-coins' value=0 title='test' />
        <x-material.stat-card icon='fa-regular fa-circle-check' value=0 title='test2' />
        <x-material.stat-card icon='fa-solid fa-cash-register' value=0 title='test3' />
        <x-material.stat-card icon='fa-solid fa-boxes-stacked' value=0 title='test4' />
        <x-material.stat-card icon='fa-solid fa-globe' value=0 title='test5' />
        <x-material.stat-card icon='fa-solid fa-calendar-check' value=0 title='test6' />
    </div>
   

</x-layout>
