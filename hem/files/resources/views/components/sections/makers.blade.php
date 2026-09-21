@props([
    'eyebrow' => 'The makers',
    'heading' => 'Seven workshops, most of them family.',
    'body' => 'We buy from people we have met, in small runs, and we tell you where every piece was made.',
    'linkLabel' => 'Why we buy this way',
    'linkUrl' => '/about',
    'items' => [],
])
<section id="makers" class="border-t border-line py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-12 px-5 sm:px-8 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-32">
                <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[14ch] font-display text-[clamp(2.25rem,4.4vw,3.75rem)] leading-none font-semibold tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-5 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <a href="{{ $linkUrl }}" class="group mt-8 inline-flex items-center gap-2 border-b border-ink pb-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $linkLabel }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M4 10h12m-4-4 4 4-4 4"/></svg></a>
            </div>
        </div>
        <ol role="list" class="border-t border-ink lg:col-span-7">
            @foreach ($items as $maker)
                <li class="grid grid-cols-[2.5rem_1fr] items-baseline gap-x-4 border-b border-line py-6 sm:grid-cols-[3rem_1fr_auto]">
                    <span class="text-sm text-muted tabular-nums" aria-hidden="true">{{ $loop->iteration }}</span>
                    <div>
                        <h3 class="font-display text-[clamp(1.5rem,2.6vw,2.25rem)] leading-tight font-medium tracking-tight text-ink">{{ $maker->name }}</h3>
                        <p class="mt-1 text-base/7 text-muted">{{ $maker->what }}</p>
                    </div>
                    <p class="col-start-2 mt-1 text-sm text-muted sm:col-start-3 sm:mt-0 sm:text-right">{{ $maker->where }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
