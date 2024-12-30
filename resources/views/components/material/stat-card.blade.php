@push('styles')
    <link rel="stylesheet" href="{{  asset('/css/components/stat-cards.css') }}">
@endpush

<div class='card_container'>
    
    <div class="card_content">
        <i class='{{ $icon }}'></i>
        <span class='title'>{{ $title }}</span>
        <span class='value'>{{ $value }}</span>
    </div>

</div>