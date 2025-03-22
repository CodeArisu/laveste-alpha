@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/textfield.css') }}">
@endpush

@props([
    'placeholder' => $placeholder,
    'label' => $label,
    'type' => 'text',
])


<div class="field">
        <label class="field_label" >{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $label }}" id="{{ $label }}" class='textfield' />
</div>