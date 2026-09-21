<footer class="border-t border-line">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-col gap-8 border-b border-line py-16 lg:flex-row lg:items-end lg:justify-between lg:py-20">
            <p class="max-w-[18ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-none font-black tracking-tight text-balance text-ink">See you at the bar.</p>
            <div class="flex flex-col gap-4 lg:items-end">
                <p class="text-base text-muted lg:text-right">{{ $site->open_summary }}<br class="max-lg:hidden"><span class="lg:hidden"> · </span>{{ $site->address }}</p>
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 self-start rounded-full py-3 pr-4 pl-5 text-base font-semibold text-ink ring-1 ring-ink/40 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:self-auto">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
        <div class="grid gap-12 py-14 sm:grid-cols-2 lg:grid-cols-[6fr_3fr_3fr]">
            <div>
                <a href="/" aria-label="Homepage" class="inline-flex rounded-sm text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-8 w-auto">
                    @else
                        <x-brand/>
                    @endif
                </a>
                <p class="mt-5 max-w-[40ch] text-base/7 text-muted">{{ $site->tagline }}</p>
            </div>
            <div>
                <h2 class="text-sm font-semibold text-ink">Get in touch</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li><a href="{{ $site->phone_href }}" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                    <li><a href="mailto:{{ $site->email }}" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                    <li><a href="{{ $site->instagram }}" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram {{ $site->instagram_handle }}</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-sm font-semibold text-ink">Explore</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li><a href="/menu" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Tap list</a></li>
                    <li><a href="/#week" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">This week</a></li>
                    <li><a href="/#story" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">The brewery</a></li>
                    <li><a href="/#visit" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Hours &amp; directions</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>Please drink responsibly.</p>
        </div>
    </div>
</footer>
