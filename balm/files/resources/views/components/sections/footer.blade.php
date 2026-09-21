<footer class="border-t border-line bg-canvas">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr]">
            <div class="flex flex-col items-start gap-5">
                <a href="/" aria-label="Homepage" class="rounded-md text-ink hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink"><x-brand/></a>
                <p class="max-w-[40ch] text-base/7 text-pretty text-muted">{{ $site->tagline }}</p>
            </div>
            <nav aria-label="Footer">
                <p class="text-sm font-semibold text-ink">The studio</p>
                <ul role="list" class="mt-5 flex flex-col gap-3 text-base">
                    <li><a href="/treatments" class="rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Treatments and prices</a></li>
                    <li><a href="/#body-map" class="rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Body map</a></li>
                    <li><a href="/#first-visit" class="rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Your first visit</a></li>
                    <li><a href="{{ $site->instagram }}" class="rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Instagram</a></li>
                </ul>
            </nav>
            <div>
                <p class="text-sm font-semibold text-ink">Get in touch</p>
                <address class="mt-5 flex flex-col gap-3 text-base text-ink not-italic">
                    <a href="{{ $site->phone_href }}" class="self-start tabular-nums rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
                    <a href="mailto:{{ $site->email }}" class="self-start break-all rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a>
                    <span class="text-muted">{{ $site->address }}, {{ $site->city }}</span>
                </address>
            </div>
        </div>
        <p class="mt-16 border-t border-line pt-8 text-sm text-muted">© {{ $site->name }}. {{ $site->credentials }}.</p>
    </div>
</footer>
