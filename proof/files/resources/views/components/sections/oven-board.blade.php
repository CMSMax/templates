@props([
    'heading' => 'Out of the oven, all morning long.',
    'body' => 'The ovens go on at four. These are the times each tray leaves them, Tuesday to Sunday — plan around the one you want warm.',
    'footnote' => 'Popular bakes sell out. Call ahead and we’ll set one aside.',
    'items' => [],
])
<section id="oven" class="border-b border-line">
    <div class="grid grid-cols-1 lg:grid-cols-12">
        <div class="px-5 py-14 sm:px-8 lg:col-span-4 lg:border-r lg:border-line lg:px-12 lg:py-24">
            <div class="lg:sticky lg:top-28">
                <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,3.6vw,3.25rem)] leading-[1.04] tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
                <p class="mt-8 flex items-start gap-3 text-base/7 text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-5 shrink-0 text-primary" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    <span>{{ $footnote }}</span>
                </p>
            </div>
        </div>
        <div class="lg:col-span-8">
            <div class="grid grid-cols-[5.5rem_1fr] gap-x-6 border-b border-line px-5 py-4 text-sm font-medium text-muted sm:grid-cols-[8.5rem_1fr] sm:px-8 lg:px-12">
                <p>Out at</p>
                <p>From the oven</p>
            </div>
            <ol role="list" class="divide-y divide-line">
                @foreach ($items as $bake)
                    <li class="grid grid-cols-[5.5rem_1fr] items-baseline gap-x-6 gap-y-2 px-5 py-7 sm:grid-cols-[8.5rem_1fr_auto] sm:px-8 lg:px-12 lg:py-9">
                        <p class="font-display text-[clamp(2rem,4vw,3.5rem)] leading-none text-primary tabular-nums">{{ $bake->time }}</p>
                        <div class="min-w-0">
                            <h3 class="font-display text-[clamp(1.5rem,2.4vw,2.125rem)] leading-tight text-ink">{{ $bake->item }}</h3>
                            <p class="mt-2 max-w-[48ch] text-base/7 text-muted">{{ $bake->note }}</p>
                        </div>
                        @if ($bake->tag)
                            <p class="col-start-2 justify-self-start border border-ink/25 px-2.5 py-1 text-sm font-medium text-ink sm:col-start-3 sm:justify-self-end">{{ $bake->tag }}</p>
                        @endif
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
