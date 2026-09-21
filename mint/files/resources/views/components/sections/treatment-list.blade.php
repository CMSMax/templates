@props(['note' => 'Prices are for a single tooth or visit unless stated. Your written plan confirms the exact cost before any treatment begins.', 'items' => []])
<section class="px-5 py-20 sm:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <ul role="list" class="border-t border-line">
            @foreach ($items as $treatment)
                <li data-reveal class="grid gap-4 border-b border-line py-10 lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-4">
                        <p class="inline-flex rounded-full bg-mint-soft px-3 py-1 text-xs font-semibold tracking-wide text-ink uppercase">{{ $treatment->group }}</p>
                        <h2 class="mt-4 font-display text-3xl font-semibold tracking-[-0.02em] text-ink">{{ $treatment->name }}</h2>
                    </div>
                    <div class="lg:col-span-5">
                        <p class="text-lg/relaxed text-pretty text-ink">{{ $treatment->blurb }}</p>
                        <p class="mt-3 text-pretty text-muted">{{ $treatment->detail }}</p>
                    </div>
                    <dl class="flex gap-8 lg:col-span-3 lg:flex-col lg:gap-4 lg:text-right">
                        <div>
                            <dt class="text-sm text-muted">Price</dt>
                            <dd class="mt-0.5 font-display text-xl font-semibold text-ink tabular-nums">{{ $treatment->price }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-muted">Time</dt>
                            <dd class="mt-0.5 font-semibold text-ink">{{ $treatment->duration }}</dd>
                        </div>
                    </dl>
                </li>
            @endforeach
        </ul>
        <p class="mt-8 flex max-w-[70ch] items-start gap-2.5 text-sm text-muted"><span class="mt-1.5 size-2 shrink-0 rounded-full bg-pop" aria-hidden="true"></span>{{ $note }}</p>
    </div>
</section>
