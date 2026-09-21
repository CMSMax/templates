<footer class="sky-night overflow-hidden text-secondary-foreground">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 pt-20 sm:grid-cols-2 sm:px-8 lg:grid-cols-[4fr_2fr_2fr_3fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg text-secondary-foreground hover:text-secondary-foreground/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand inverted="1"/>
            </a>
            <p class="mt-5 max-w-[38ch] text-base/7 text-secondary-foreground/75">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-secondary-foreground">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-secondary-foreground/75 sm:text-sm/6">
                <li><a href="/#specialties" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">What I help with</a></li>
                <li><a href="/#about" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">About</a></li>
                <li><a href="/fees" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Fees &amp; insurance</a></li>
                <li><a href="/fees#faq" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-secondary-foreground">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-secondary-foreground/75 sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                <li>{{ $site->address }}</li>
                <li>{{ $site->city }}</li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-secondary-foreground">In a crisis</h2>
            <p class="mt-4 text-base/7 text-secondary-foreground/75 sm:text-sm/6">{{ $site->crisis_note }}</p>
            <a href="{{ $site->crisis_href }}" class="mt-3 inline-flex min-h-12 items-center gap-2 rounded-full px-4 text-sm font-semibold text-secondary-foreground ring-1 ring-secondary-foreground/25 ring-inset hover:bg-secondary-foreground/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call or text {{ $site->crisis_phone }}</a>
        </div>
    </div>
    <div class="mx-auto mt-16 max-w-6xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-secondary-foreground/15 py-6 text-sm text-secondary-foreground/70">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->license_note }}</p>
        </div>
    </div>
    <p class="mx-auto -mb-[0.2em] max-w-6xl px-3 pt-6 font-display text-[clamp(6rem,26vw,20rem)] leading-[0.9] font-light tracking-[-0.05em] text-secondary-foreground/90 italic select-none sm:px-6" aria-hidden="true">{{ $site->short_name }}<span class="text-primary not-italic">.</span></p>
</footer>
