<footer class="border-t border-line bg-canvas">
    <div class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr]">
            <div class="flex flex-col items-start gap-5">
                <a href="/" aria-label="{{ $site->name }} — home" class="rounded-md text-ink hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink"><x-brand/></a>
                <p class="max-w-[40ch] text-base/7 text-muted">{{ $site->tagline }}</p>
            </div>
            <nav aria-label="Footer">
                <p class="font-display text-lg font-bold text-ink">Around here</p>
                <ul role="list" class="mt-4 flex flex-col gap-3 text-base">
                    <li><a href="/#programs" class="rounded-sm text-muted hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">What we do</a></li>
                    <li><a href="/#dollar" class="rounded-sm text-muted hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Where it goes</a></li>
                    <li><a href="/get-involved" class="rounded-sm text-muted hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Get involved</a></li>
                    <li><a href="{{ $site->instagram }}" class="rounded-sm text-muted hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Instagram</a></li>
                </ul>
            </nav>
            <div>
                <p class="font-display text-lg font-bold text-ink">The hall</p>
                <address class="mt-4 flex flex-col gap-3 text-base text-muted not-italic">
                    <span>{{ $site->address }}, {{ $site->city }}</span>
                    <a href="{{ $site->phone_href }}" class="self-start rounded-sm tabular-nums hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
                    <a href="mailto:{{ $site->email }}" class="self-start rounded-sm break-all hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a>
                </address>
            </div>
        </div>
        <div class="mt-16 flex flex-col gap-3 border-t border-line pt-8 text-sm text-muted md:flex-row md:justify-between">
            <p>© {{ $site->name }}, since {{ $site->founded }}.</p>
            <p>{{ $site->status }}</p>
        </div>
    </div>
</footer>
