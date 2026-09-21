@props(['eyebrow' => 'Treatments', 'heading' => 'Everything your smile needs, under one roof.', 'intro' => 'Every price is published. Every plan is written down before we start. Nothing is added in the chair.', 'linkLabel' => 'All treatments & prices', 'linkHref' => '/treatments', 'items' => []])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-12 lg:gap-8">
        <div data-reveal class="lg:col-span-4">
            <div class="lg:sticky lg:top-28">
                <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h2 class="mt-5 max-w-[14ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-5 max-w-[36ch] text-lg/relaxed text-pretty text-muted">{{ $intro }}</p>
                <a href="{{ $linkHref }}" class="group mt-8 inline-flex items-center gap-2 rounded-full font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <span class="underline decoration-mint decoration-4 underline-offset-8 transition-colors group-hover:decoration-accent">{{ $linkLabel }}</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
        <ul role="list" data-reveal class="border-t border-line lg:col-span-7 lg:col-start-6">
            @foreach ($items as $treatment)
                <li>
                    <a href="{{ $linkHref }}" class="group grid grid-cols-[1fr_auto] items-baseline gap-x-6 gap-y-1 border-b border-line py-6 transition-colors duration-150 hover:bg-mint-soft focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:-mx-4 sm:px-4">
                        <span class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $treatment->name }}</span>
                        <span class="text-right font-medium text-ink tabular-nums">{{ $treatment->price }}</span>
                        <span class="max-w-[52ch] text-pretty text-muted">{{ $treatment->blurb }}</span>
                        <span class="text-right text-sm text-muted">{{ $treatment->duration }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
