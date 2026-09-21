<footer class="bg-canvas">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr]">
            <div class="flex flex-col items-start gap-5">
                <a href="/" aria-label="Homepage" class="rounded-md text-ink hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"><x-brand/></a>
                <p class="max-w-[36ch] text-base/7 text-pretty text-muted">{{ $site->tagline }}</p>
            </div>
            <nav aria-label="Footer">
                <p class="text-xs font-medium tracking-[0.2em] text-muted uppercase">The house</p>
                <ul role="list" class="mt-5 flex flex-col gap-3 text-base">
                    <li><a href="/rooms" class="rounded-sm text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Rooms</a></li>
                    <li><a href="/#stay" class="rounded-sm text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">The stay</a></li>
                    <li><a href="/#nearby" class="rounded-sm text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Nearby</a></li>
                    <li><a href="{{ $site->instagram }}" class="rounded-sm text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Instagram</a></li>
                </ul>
            </nav>
            <div>
                <p class="text-xs font-medium tracking-[0.2em] text-muted uppercase">Front desk</p>
                <address class="mt-5 flex flex-col gap-3 text-base text-ink not-italic">
                    <a href="{{ $site->phone_href }}" class="self-start rounded-sm tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a>
                    <a href="mailto:{{ $site->email }}" class="self-start rounded-sm break-all hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->email }}</a>
                    <span class="text-muted">{{ $site->address }}, {{ $site->city }}</span>
                </address>
            </div>
        </div>
        <p class="mt-16 border-t border-line pt-8 text-sm text-muted">© {{ $site->name }}. {{ $site->rate_note }}</p>
    </div>
</footer>
