<footer class="overflow-hidden border-t border-line pt-16 sm:pt-20">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:grid-cols-2 sm:px-8 lg:grid-cols-[4fr_2fr_2fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[40ch] text-base/7 text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Visit</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}</li>
                <li>{{ $site->city }}</li>
                <li><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="rounded-sm tabular-nums hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="/#conditions" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Conditions</a></li>
                <li><a href="/#first-visit" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Your first visit</a></li>
                <li><a href="/care" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Care &amp; pricing</a></li>
                <li><a href="/care#questions" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Questions</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto mt-14 max-w-7xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->license_note }}</p>
        </div>
    </div>
    <p class="-mb-[0.18em] px-3 text-center font-display text-[clamp(7rem,30vw,26rem)] leading-[0.8] font-semibold tracking-[-0.03em] text-surface select-none" aria-hidden="true">{{ $site->short_name }}</p>
</footer>
