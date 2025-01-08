@push('styles')
    <style>
        .back_content {
            margin-inline: 20px;
        }
        .back_btn {
            text-decoration: none;
            font-size: 1.5rem;
            font-family: var(--font-secondary);
            color: var(--text-secondary);
        }
    </style>
@endpush

@props([
    'route' => url()->previous(),
    'text' => 'Back'
])

<div class='back_content'>
    <a class='back_btn' href="{{ $route }}">
        <i class="fa-solid fa-arrow-left-long"></i>
        {{ $text }} 
    </a>
</div>