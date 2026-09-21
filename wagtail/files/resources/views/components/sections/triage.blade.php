@props([
    'heading' => 'What brings you in?',
    'body' => 'Three different days, three different answers. Pick the one that sounds like yours.',
])
<section aria-labelledby="triage-heading" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="lg:sticky lg:top-10 lg:self-start">
            <h2 id="triage-heading" class="font-display text-[clamp(2rem,4vw,3.25rem)] leading-[1.05] font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="border-t border-ink">
            @foreach ($site->triage as $route)
                <li class="border-b border-line">
                    <a href="{{ $route->link }}" class="group flex flex-col gap-4 py-8 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span>
                            <span class="block font-display text-2xl font-semibold tracking-tight text-ink sm:text-[1.75rem]">{{ $route->title }}</span>
                            <span class="mt-2 block max-w-[52ch] text-base/7 text-muted">{{ $route->body }}</span>
                        </span>
                        <span class="inline-flex items-center gap-2 text-base font-semibold text-primary">
                            <span class="underline decoration-primary/30 underline-offset-[6px] group-hover:decoration-primary">{{ $route->label }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
