@props([
    'heading' => 'Book the truck.',
    'body' => 'We park at weddings, office lunches, brewery nights and backyard birthdays. Tell us the date, the headcount and roughly where, and we will send back a menu and a price within a day.',
    'linkLabel' => 'Ask about a date',
    'note' => 'Private events from 40 guests. We bring the truck, the crew and the paper plates.',
    'image' => '/images/patio.jpg',
    'imageAlt' => 'The food truck lit up at dusk on a brewery patio under string lights, guests at picnic tables',
])
<section id="catering" class="scroll-mt-18 border-y-2 border-ink bg-primary text-primary-foreground">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-5 py-20 sm:px-8 lg:grid-cols-2 lg:gap-16 lg:py-28">
        <div>
            <h2 class="font-display text-[clamp(3rem,7vw,5.5rem)] leading-[0.92] font-black text-balance uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-pretty">{{ $body }}</p>
            <ul role="list" class="mt-8 grid max-w-lg grid-cols-2 gap-x-8 border-t-2 border-ink">
                @foreach ($site->catering_events as $event)
                    <li class="flex items-center gap-3 border-b border-ink/25 py-3 text-base font-semibold">
                        <span class="size-2 shrink-0 rotate-45 bg-ink" aria-hidden="true"></span>
                        {{ $event }}
                    </li>
                @endforeach
            </ul>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="mailto:{{ $site->catering_email }}" class="inline-flex items-center gap-2 bg-ink py-3.5 pr-4 pl-6 text-base font-semibold text-canvas hover:bg-ink/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="text-base font-semibold underline decoration-ink/40 decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">or call {{ $site->phone }}</a>
            </div>
            <p class="mt-8 max-w-[46ch] text-sm/6 text-pretty text-ink/85">{{ $note }}</p>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full border-2 border-ink object-cover">
    </div>
</section>
