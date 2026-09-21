<footer class="bg-secondary text-secondary-foreground">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 pt-20 pb-12 sm:grid-cols-2 sm:px-8 lg:grid-cols-[5fr_3fr_3fr_2fr]">
        <div>
            <p class="max-w-[34ch] text-lg/8 text-secondary-foreground/80">{{ $site->tagline }}</p>
            <a href="{{ $site->booking_url }}" class="mt-8 inline-flex items-center gap-2 bg-primary py-3 pr-4 pl-5 font-semibold text-primary-foreground hover:bg-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                {{ $site->cta_label }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
            </a>
        </div>
        <div>
            <h2 class="font-display text-sm tracking-[0.06em] uppercase">Find us</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-secondary-foreground/75 sm:text-sm/6">
                <li><a href="{{ $site->directions_url }}" class="font-normal hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->address }}, {{ $site->city }}</a></li>
                <li><a href="{{ $site->phone_href }}" class="font-normal tabular-nums hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="font-normal hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-display text-sm tracking-[0.06em] uppercase">Hours</h2>
            <dl class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div class="flex justify-between gap-4">
                        <dt class="text-secondary-foreground/75">{{ $slot->day }}</dt>
                        <dd class="tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h2 class="font-display text-sm tracking-[0.06em] uppercase">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                <li><a href="/#work" class="font-normal text-secondary-foreground/75 hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Work</a></li>
                <li><a href="/flash" class="font-normal text-secondary-foreground/75 hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Flash</a></li>
                <li><a href="/artists" class="font-normal text-secondary-foreground/75 hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Artists</a></li>
                <li><a href="{{ $site->instagram }}" class="font-normal text-secondary-foreground/75 hover:text-secondary-foreground hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="overflow-hidden px-5 sm:px-8">
        <p class="mx-auto max-w-7xl font-display text-[clamp(4.5rem,21vw,19rem)] leading-[0.8] tracking-[-0.03em] uppercase" aria-hidden="true">{{ $site->short_name }}</p>
    </div>
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-secondary-foreground/20 py-6 text-sm text-secondary-foreground/70">
            <p>© {{ $site->name }} · Est. {{ $site->established }}</p>
            <p>{{ $site->age_note }}</p>
        </div>
    </div>
</footer>
