@props([
    'eyebrow' => 'Extras',
    'heading' => 'Add anything, any visit.',
    'body' => 'Mention it when you book. Each extra is a flat price on top of your clean, whatever the size of your home.',
    'items' => [],
])
<section id="extras" class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-4">
                <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[14ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <ul role="list" class="grid gap-x-12 lg:col-span-8 sm:grid-cols-2">
                @foreach ($items as $extra)
                    <li class="border-b border-line py-6">
                        <div class="flex items-baseline gap-3">
                            <p class="font-display text-lg font-semibold tracking-tight text-ink">{{ $extra->name }}</p>
                            <span class="min-w-6 flex-1 translate-y-[-0.3em] border-b-2 border-dotted border-ink/25" aria-hidden="true"></span>
                            <p class="font-display text-lg font-semibold tracking-tight text-ink tabular-nums">{{ $extra->price }}</p>
                        </div>
                        <p class="mt-1.5 text-base/7 text-pretty text-muted sm:text-[0.9375rem]/6">{{ $extra->note }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
