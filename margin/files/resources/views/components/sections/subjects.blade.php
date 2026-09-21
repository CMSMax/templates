@props(['items', 'heading' => 'Five subjects, taught properly.', 'note' => 'Every program runs one-to-one or in a group of four, in Harrow Hill or online.'])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-x-12 gap-y-4">
            <h2 class="max-w-[16ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[40ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <ul role="list" class="mt-14 border-t border-ink/80">
            @foreach ($items as $subject)
                <li class="border-b border-line">
                    <a href="{{ $subject->link }}" class="group grid items-baseline gap-x-8 gap-y-1 py-6 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:grid-cols-[minmax(0,1fr)_auto] lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)_auto] lg:py-7">
                        <span class="font-display text-[clamp(1.75rem,3.4vw,2.75rem)]/[1.1] font-normal tracking-[-0.015em] text-ink transition-colors duration-150 group-hover:text-accent">{{ $subject->title }}</span>
                        <span class="max-w-[42ch] text-base/7 text-muted max-lg:hidden">{{ $subject->summary }}</span>
                        <span class="flex items-center gap-4 text-[0.9375rem] text-muted">
                            <span class="tabular-nums">{{ $subject->ages }}</span>
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink transition-transform duration-200 ease-out group-hover:translate-x-1 group-hover:text-accent" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5"/></svg>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
