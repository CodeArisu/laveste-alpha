@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/radio-btn.css') }}">
@endpush

@props([
    'type' => 'radio',
    'name' => $placeholder
]
)

<div class='radio_btn_base'>
    <input type="{{ $type }}" class='radio_btn' name="{{ $name }}" id="{{ $name }}" value="{{ $name }}">
    <label for="{{ $name }}">{{ $name }}</label>
</div>