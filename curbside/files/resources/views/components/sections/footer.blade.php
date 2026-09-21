<footer class="bg-ink text-canvas">
    <div class="mx-auto max-w-7xl px-5 pt-20 sm:px-8 lg:pt-28">
        <div class="grid gap-10 border-b border-canvas/15 pb-16 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16 lg:pb-20">
            <p class="font-display text-[clamp(3rem,8vw,6rem)] leading-[0.9] font-black text-balance uppercase">Hungry? <span class="text-primary">Come find us.</span></p>
            <div>
                @foreach ($stops as $stop)
                    @if ($stop->next)
                        <p class="text-lg/8 text-pretty text-canvas/70">Next up: <span class="font-semibold text-canvas">{{ $stop->day }} at {{ $stop->place }}</span>, {{ $stop->address }}, {{ $stop->hours }}.</p>
                    @endif
                @endforeach
                <a href="{{ $site->cta_link }}" class="mt-6 inline-flex items-center gap-2 border-2 border-primary bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground hover:bg-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
        <div class="grid gap-12 py-16 sm:grid-cols-2 lg:grid-cols-[6fr_3fr_3fr]">
            <div>
                <a href="/" aria-label="Homepage" class="inline-flex rounded-sm text-canvas hover:text-canvas/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-7 w-auto">
                    @else
                        <x-brand/>
                    @endif
                </a>
                <p class="mt-5 max-w-[38ch] text-base/7 text-pretty text-canvas/70">{{ $site->tagline }}</p>
            </div>
            <div>
                <h2 class="text-sm font-semibold text-canvas">Get in touch</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li><a href="{{ $site->phone_href }}" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                    <li><a href="mailto:{{ $site->email }}" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                    <li><a href="{{ $site->instagram }}" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram {{ $site->instagram_handle }}</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-sm font-semibold text-canvas">Explore</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li><a href="/menu" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Menu</a></li>
                    <li><a href="/#stops" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">This week</a></li>
                    <li><a href="/#story" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Our story</a></li>
                    <li><a href="/#catering" class="rounded-sm text-canvas/70 hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Catering</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-canvas/15 py-6 text-sm text-canvas/70">
            <p>© {{ $site->name }}</p>
            <p>Rolling around {{ $site->city }}</p>
        </div>
    </div>
    <div class="curb-stripe h-3" aria-hidden="true"></div>
</footer>
