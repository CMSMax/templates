<footer class="border-t border-line">
    <div class="mx-auto grid max-w-6xl gap-10 px-6 py-14 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 font-display font-semibold tracking-tight text-ink hover:text-ink/70">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110.8 156" fill="currentColor" class="h-5 w-auto shrink-0" aria-hidden="true"><path d="m79 136-45.3-56.4 46.1-56.1h29.9l-47 56.1 45.8 56.4h-29.8"/><path d="M2.7 20.9 28.6 2v152L2.7 135Z"/></svg>
                <span>{{ $site->short_name }}</span>
            </a>
            <p class="mt-3 max-w-[36ch] text-base/7 text-muted sm:text-sm/6 text-pretty">{{ $site->tagline }} Serving {{ $site->service_area }}.</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Contact</h2>
            <ul role="list" class="mt-3 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->email }}</a></li>
                <li>{{ $site->address }}</li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Hours</h2>
            <dl class="mt-3 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div class="flex justify-between gap-4">
                        <dt>{{ $slot->day }}</dt>
                        <dd class="tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
            <p class="mt-2 text-base/7 text-muted sm:text-sm/6">{{ $site->hours_note }}.</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Explore</h2>
            <ul role="list" class="mt-3 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                <li><a href="/services" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Services</a></li>
                <li><a href="/about" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">About</a></li>
                <li><a href="/reviews" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Reviews</a></li>
                <li><a href="/contact" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-line">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-2 px-6 py-5 text-sm text-muted">
            <p>© {{ $site->name }}. All rights reserved.</p>
            <p>Licensed, bonded, and insured.</p>
        </div>
    </div>
</footer>
