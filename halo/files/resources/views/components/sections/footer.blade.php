<footer class="pt-20 sm:pt-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:grid-cols-2 sm:px-8 lg:grid-cols-[5fr_2fr_2fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-6 max-w-[40ch] text-base/7 text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="text-xs font-semibold tracking-[0.18em] text-ink uppercase">Visit</h2>
            <ul role="list" class="mt-5 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}, {{ $site->city }}</li>
                <li>{{ $site->hours_short }}</li>
                <li><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 transition-colors duration-150 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-xs font-semibold tracking-[0.18em] text-ink uppercase">Contact</h2>
            <ul role="list" class="mt-5 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="rounded-sm transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                @foreach ($site->social as $link)
                    <li><a href="{{ $link->href }}" class="rounded-sm transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $link->label }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="text-xs font-semibold tracking-[0.18em] text-ink uppercase">Explore</h2>
            <ul role="list" class="mt-5 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                @foreach ($site->nav as $link)
                    <li><a href="{{ $link->href }}" class="rounded-sm transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $link->label }}</a></li>
                @endforeach
                <li><a href="{{ $site->cta_link }}" class="rounded-sm transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto mt-16 max-w-7xl px-5 sm:px-8">
        <p class="font-display text-[clamp(4.5rem,19vw,17rem)] leading-[0.8] tracking-[-0.04em] text-primary/15 italic select-none" aria-hidden="true">{{ $site->short_name }}</p>
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-line py-7 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->license_note }}</p>
        </div>
    </div>
</footer>
