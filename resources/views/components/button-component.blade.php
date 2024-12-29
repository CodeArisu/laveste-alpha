@push('styles')
    <link href='css/components/button.css' rel="stylesheet">
@endpush

<button {{ $attributes->merge(['class' => $btnType]) }}>
    {{ $btnTitle }}
</button>