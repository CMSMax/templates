@props([
    'heading' => 'The attorneys',
    'body' => 'Three lawyers, one office, and a combined sixty years of practice in this city.',
    'linkLabel' => 'Meet the firm',
    'showBios' => '0',
    'items' => [],
])
<section id="attorneys" class="py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between sm:gap-16">
            <div>
                <h2 class="font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            @if ($showBios != '1')
                <a href="/about#attorneys" class="group inline-flex shrink-0 items-center gap-2 self-start py-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary sm:self-end">
                    <span class="underline decoration-line underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            @endif
        </div>
        <ul role="list" class="mt-16 grid gap-x-8 gap-y-14 sm:grid-cols-2 lg:mt-20 lg:grid-cols-3">
            @foreach ($items as $person)
                <li>
                    <div class="overflow-hidden rounded-[min(3vw,1.5rem)] bg-line">
                        <img src="{{ $person->image }}" alt="" width="1200" height="1500" loading="lazy" class="aspect-4/5 w-full object-cover">
                    </div>
                    <h3 class="mt-6 font-display text-2xl tracking-tight text-ink">{{ $person->name }}</h3>
                    <p class="mt-1 text-base text-muted">{{ $person->role }}</p>
                    @if ($showBios == '1')
                        <p class="mt-4 max-w-[46ch] text-base/7 text-pretty text-ink/85">{{ $person->bio }}</p>
                        <p class="mt-4 border-t border-line pt-4 text-sm/6 text-muted">{{ $person->credentials }}</p>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</section>
