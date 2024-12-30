@push('styles')
    <link rel="stylesheet" href="{{  asset('/css/components/stat-cards.css') }}">
@endpush

<div class='card_container'>
    
    <div class="card_content">
        <span>{{ $title }}</span>
        <span>{{ $value }}</span>
        <i class='{{ $icon }}'></i>
    </div>

</div>