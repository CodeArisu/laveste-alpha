@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/adminpage/index.css') }}">
@endpush

<x-layout>
    <x-admin-navbar/>

    <div class='admin_content'>
        <x-heading text='Dashboard' textColor='secondary' />
        <div class='card_holder'>
            <x-stat-card 
            icon='fa-solid fa-coins' 
            value=200
            title='Total Sales' 
            />
            <x-stat-card 
            icon='fa-regular fa-circle-check' 
            value=0 
            title='Completed Transaction' 
            />
            <x-stat-card 
            icon='fa-solid fa-cash-register' 
            value=0 
            title='Ongoing Transaction' 
            />
            <x-stat-card 
            icon='fa-solid fa-boxes-stacked' 
            value=0 
            title='Products' 
            />
            <x-stat-card 
            icon='fa-solid fa-globe' 
            value=0 
            title='Displayed Products' 
            />
            <x-stat-card 
            icon='fa-solid fa-calendar-check' 
            value=0 
            title='Upcoming Appointments' 
            />
        </div>
    </div>
    
</x-layout>
