@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$widthClass = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative custom-dropdown">
    <div class="custom-dropdown-trigger cursor-pointer">
        {{ $trigger }}
    </div>

    <div class="custom-dropdown-content absolute z-50 mt-2 {{ $widthClass }} rounded-md shadow-lg {{ $alignmentClasses }} hidden transition ease-out duration-200 opacity-0 scale-95 origin-top-right"
         style="display: none;">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
