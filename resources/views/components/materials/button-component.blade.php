@push('styles')
    <link href="{{ asset('/css/components/button.css') }}" rel="stylesheet">
@endpush

<button {{ $attributes->merge(['class' => $btnType]) }}>
    {{ $btnTitle }}
</button>