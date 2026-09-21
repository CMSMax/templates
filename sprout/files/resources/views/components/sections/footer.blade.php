<footer class="mt-8 border-t border-line">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 pt-16 pb-10 sm:grid-cols-2 sm:px-8 lg:grid-cols-[3fr_2fr_2fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[36ch] text-base/7 text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-ink">Visit</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}, {{ $site->city }}</li>
                <li><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-ink">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->email }}</a></li>
                <li>{{ $site->hours_short }}</li>
            </ul>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-ink">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                <li><a href="/programs" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Programs</a></li>
                <li><a href="/#day" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Our day</a></li>
                <li><a href="/#approach" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Approach</a></li>
                <li><a href="/#tour" class="rounded-sm text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->license_note }}</p>
        </div>
    </div>
</footer>
