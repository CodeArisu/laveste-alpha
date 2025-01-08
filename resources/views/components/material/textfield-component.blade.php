@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/textfield.css') }}">
@endpush

@props([
    'placeholder' => $placeholder,
    'label' => $label,
    'type' => 'text',
])

<label for="{{ $label }}" class="field_label" >{{ $label }}</label>
<div class="field">
        <input type="{{ $type }}" name="{{ $label }}" placeholder="{{ $placeholder }}" id="{{ $label }}" class='textfield' />
</div>