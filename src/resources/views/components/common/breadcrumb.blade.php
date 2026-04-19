@props(['items' => []])
<nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-500 dark:text-slate-400">
    <ol class="flex flex-wrap items-center gap-2">
        @foreach($items as $index => $item)
            <li class="inline-flex items-center gap-2">
                @if(!empty($item['url']))
                    <a href="{{ $item['url'] }}" class="hover:text-brand-600 dark:hover:text-brand-300">{{ $item['label'] }}</a>
                @else
                    <span class="text-slate-700 dark:text-slate-200">{{ $item['label'] }}</span>
                @endif
                @if(!$loop->last)
                    <span>/</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
