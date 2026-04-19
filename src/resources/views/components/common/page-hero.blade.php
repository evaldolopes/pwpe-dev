@props(['title', 'subtitle' => null])
<section class="relative overflow-hidden border-b border-slate-200 py-16 dark:border-white/10 md:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(34,211,238,.18),transparent_28%),radial-gradient(circle_at_bottom_right,rgba(59,130,246,.12),transparent_24%)]"></div>
    <x-ui.container class="relative z-10">
        <x-common.breadcrumb :items="$breadcrumbs ?? [['label' => 'Home', 'url' => route('home')], ['label' => $title]]" />
        <div class="max-w-4xl">
            <h1 class="text-4xl font-black leading-tight md:text-6xl">{{ $title }}</h1>
            @if($subtitle)
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-600 dark:text-slate-300">{{ $subtitle }}</p>
            @endif
        </div>
    </x-ui.container>
</section>