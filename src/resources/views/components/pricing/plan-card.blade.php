@props([
    'name',
    'description',
    'monthlyPrice',
    'annualPrice',
    'features'   => [],
    'highlight'  => false,
    'tag'        => null,
    'buttonText' => 'Escolher plano',
    'buttonHref' => null,
])

@php $buttonHref = $buttonHref ?? route('contato'); @endphp

<div @if($highlight) data-featured="true" @endif
     class="group/tier rounded-3xl p-8 ring-1 ring-gray-200 data-featured:ring-2 data-featured:ring-indigo-600 xl:p-10 dark:bg-gray-800/50 dark:ring-white/15 dark:data-featured:ring-indigo-400">

    <div class="flex items-center justify-between gap-x-4">
        <h3 class="text-lg/8 font-semibold text-gray-900 group-data-featured/tier:text-indigo-600 dark:text-white dark:group-data-featured/tier:text-indigo-400">
            {{ $name }}
        </h3>
        @if($tag)
            <p class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs/5 font-semibold text-indigo-600 dark:bg-indigo-500 dark:text-white">
                {{ $tag }}
            </p>
        @endif
    </div>

    <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-300">{{ $description }}</p>

    <p class="mt-6 flex items-baseline gap-x-1 billing-price" data-show="monthly">
        <span class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">R$ {{ $monthlyPrice }}</span>
        <span class="text-sm/6 font-semibold text-gray-600 dark:text-gray-400">/mês</span>
    </p>

    <p class="mt-6 flex items-baseline gap-x-1 billing-price hidden" data-show="annually">
        <span class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">R$ {{ $annualPrice }}</span>
        <span class="text-sm/6 font-semibold text-gray-600 dark:text-gray-400">/mês no anual</span>
    </p>

    <a href="{{ $buttonHref }}"
       class="mt-6 block w-full rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-200 group-data-featured/tier:bg-indigo-600 group-data-featured/tier:text-white group-data-featured/tier:ring-0 hover:ring-indigo-300 group-data-featured/tier:hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-white/10 dark:text-white dark:ring-white/5 dark:group-data-featured/tier:bg-indigo-500 dark:hover:bg-white/20 dark:group-data-featured/tier:hover:bg-indigo-400">
        {{ $buttonText }}
    </a>

    <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 xl:mt-10 dark:text-gray-300">
        @foreach($features as $feature)
            <li class="flex gap-x-3">
                <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" />
                </svg>
                {{ $feature }}
            </li>
        @endforeach
    </ul>
</div>
