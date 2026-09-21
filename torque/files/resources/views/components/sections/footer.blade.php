<footer class="bg-field text-field-ink">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-12 py-16 sm:grid-cols-2 lg:grid-cols-[6fr_3fr_3fr] lg:py-20">
            <div>
                <a href="/" aria-label="Homepage" class="inline-flex rounded-sm text-field-ink transition-colors duration-150 hover:text-field-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-field-ink">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-8 w-auto">
                    @else
                        <x-brand/>
                    @endif
                </a>
                <p class="mt-5 max-w-[44ch] text-base/7 text-field-muted">{{ $site->tagline }}</p>
            </div>
            <div>
                <h2 class="font-display text-base font-bold tracking-wide uppercase">The shop</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li class="text-field-muted">{{ $site->address }}, {{ $site->city }}</li>
                    <li><a href="{{ $site->phone_href }}" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">{{ $site->phone }}</a></li>
                    <li><a href="mailto:{{ $site->email }}" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">{{ $site->email }}</a></li>
                    @foreach ($hours as $row)
                        <li class="text-field-muted">{{ $row->day }}: {{ $row->hours }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="font-display text-base font-bold tracking-wide uppercase">Explore</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                    <li><a href="/services" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">Services &amp; prices</a></li>
                    <li><a href="/#lights" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">Warning lights</a></li>
                    <li><a href="/#process" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">How it works</a></li>
                    <li><a href="/#book" class="rounded-sm text-field-muted transition-colors duration-150 hover:text-field-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink">Book a service</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-field-line py-6 text-sm text-field-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->warranty }} warranty on every repair</p>
        </div>
    </div>
</footer>
