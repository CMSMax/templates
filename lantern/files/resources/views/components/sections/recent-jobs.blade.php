@props([
    'items',
    'heading' => 'Work from the last few weeks.',
    'linkLabel' => 'All recent work',
    'linkUrl' => '/work',
])
<section class="@@container border-b border-line py-20 lg:py-32">
    <div class="mx-auto flex max-w-6xl flex-wrap items-end justify-between gap-x-8 gap-y-4 px-6">
        <h2 class="max-w-[20ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
        <a href="{{ $linkUrl }}" class="flex items-center gap-2 font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
            {{ $linkLabel }}
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M2.5 8h11m-4.5-4.5L13.5 8 9 12.5"/></svg>
        </a>
    </div>
    <ul role="list" class="mt-12 flex snap-x snap-mandatory gap-8 overflow-x-auto px-[max(1.5rem,calc((100cqw-72rem)/2+1.5rem))] pb-2">
        @foreach ($items as $job)
            <li class="w-[20rem] shrink-0 snap-start sm:w-[24rem]">
                <figure>
                    <img src="{{ $job->image }}" alt="{{ $job->imageAlt }}" width="1400" height="1050" loading="lazy" decoding="async" class="aspect-4/3 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5">
                    <figcaption class="mt-5 border-t border-line pt-4">
                        <p class="text-base/6 text-muted sm:text-sm/6">{{ $job->trade }} — {{ $job->place }}</p>
                        <p class="mt-1.5 font-display text-lg font-semibold tracking-tight text-ink">{{ $job->title }}</p>
                        <p class="mt-2 text-base/6 text-muted sm:text-sm/6">{{ $job->note }}</p>
                    </figcaption>
                </figure>
            </li>
        @endforeach
    </ul>
</section>
