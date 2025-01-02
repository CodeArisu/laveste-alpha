@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/button.css') }}">
@endpush

<button {{ $attributes->merge(['class' => $btnType]) }}>
    {{ $btnTitle }}
</button>