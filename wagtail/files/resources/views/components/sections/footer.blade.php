<footer class="pt-16 sm:pt-20">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:grid-cols-2 sm:px-8 lg:grid-cols-[4fr_2fr_2fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[38ch] text-base/7 text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Visit</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}, {{ $site->city }}</li>
                <li>{{ $site->hours_short }}</li>
                <li><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                <li>Emergencies: <a href="{{ $site->emergency_phone_href }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->emergency_phone }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="/services" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services &amp; prices</a></li>
                <li><a href="/#approach" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Our approach</a></li>
                <li><a href="/services#faq" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">New patients</a></li>
                <li><a href="/#visit" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto mt-14 max-w-6xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->license_note }}</p>
        </div>
    </div>
</footer>
