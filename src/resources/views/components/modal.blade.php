@php
$maxWidthClass = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    id="modal-{{ $name }}"
    data-modal-name="{{ $name }}"
    show="{{ $show ? '1' : '0' }}"
    class="custom-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50 {{ $show ? '' : 'hidden' }}"
    style="{{ $show ? 'display: block;' : 'display: none;' }}"
>
    <!-- Backdrop -->
    <div
        class="custom-modal-backdrop fixed inset-0 transform transition-all opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- Modal Content -->
    <div
        class="custom-modal-panel mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidthClass }} sm:mx-auto opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>
