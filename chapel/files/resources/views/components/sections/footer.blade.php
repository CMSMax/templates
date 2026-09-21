<footer class="pt-20 sm:pt-24">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:grid-cols-2 sm:px-8 lg:grid-cols-[5fr_3fr_3fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[36ch] text-base/7 text-pretty text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="smallcaps text-base text-ink">Worship</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                @foreach ($gatherings as $gathering)
                    <li><span class="oldstyle">{{ $gathering->day }} {{ $gathering->time }}</span> · {{ $gathering->name }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="smallcaps text-base text-ink">Find us</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}, {{ $site->city }}</li>
                <li><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                <li><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="smallcaps text-base text-ink">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                @foreach ($site->nav_links as $item)
                    <li><a href="{{ $item->link }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $item->label }}</a></li>
                @endforeach
                <li><a href="{{ $site->cta_link }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto mt-16 max-w-6xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p class="font-display text-base italic">{{ $site->footer_note }}</p>
        </div>
    </div>
</footer>
