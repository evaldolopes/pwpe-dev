@props([
'name',
'description',
'monthlyPrice',
'annualPrice',
'features' => [],
'highlight' => false,
'tag' => null,
'buttonText' => 'Escolher plano',
])

<x-ui.card :highlight="$highlight" class="relative h-full">
    @if($tag)
    <div class="absolute right-6 top-0 -translate-y-1/2">
        <x-ui.badge :variant="$highlight ? 'primary' : 'default'">{{ $tag }}</x-ui.badge>
    </div>
    @endif

    <div class="flex items-center justify-between gap-3">
        <h3 class="text-2xl font-black">{{ $name }}</h3>
        @if($highlight)
        <x-ui.badge variant="primary">Mais vendido</x-ui.badge>
        @endif
    </div>

    <p class="mt-3 text-slate-600 dark:text-slate-300">{{ $description }}</p>

    <div class="mt-6">
        <div x-show="billing === 'monthly'">
            <span class="text-4xl font-black {{ $highlight ? 'text-brand-600 dark:text-brand-300' : 'text-slate-900 dark:text-white' }}">R$ {{ $monthlyPrice }}</span>
            <span class="text-slate-500 dark:text-slate-400">/mês</span>
        </div>
        <div x-show="billing === 'annual'" x-cloak>
            <span class="text-4xl font-black {{ $highlight ? 'text-brand-600 dark:text-brand-300' : 'text-slate-900 dark:text-white' }}">R$ {{ $annualPrice }}</span>
            <span class="text-slate-500 dark:text-slate-400">/mês no anual</span>
        </div>
    </div>

    <ul class="mt-6 space-y-3 text-sm text-slate-700 dark:text-slate-200">
        @foreach($features as $feature)
        <li class="flex items-start gap-3">
            <x-ui.icon name="check" class="mt-0.5 h-4 w-4 shrink-0" />
            <span>{{ $feature }}</span>
        </li>
        @endforeach
    </ul>

    <x-ui.button href="{{ route('contato') }}" :variant="$highlight ? 'primary' : 'secondary'" class="mt-8 w-full justify-center">
        {{ $buttonText }}
    </x-ui.button>
</x-ui.card>