@props(['links' => [], 'blurb' => 'Licensed plumbers for Denver homes since 2009. Flat prices, quoted before we pick up a wrench.', 'copyright' => 'Plumb Line Plumbing Co.'])
<footer class="tread bg-ink text-canvas">
    <div class="mx-auto max-w-7xl px-5 py-16 md:px-8 md:py-20">
        <div class="grid gap-12 md:grid-cols-12 md:gap-10">
            <div class="md:col-span-5">
                <a href="/" aria-label="Homepage" class="inline-flex min-h-11 items-center gap-2.5">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-8 w-auto">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0 text-primary" aria-hidden="true"><path fill="currentColor" d="M15 1h2v7h-2Z"/><rect width="12" height="4" x="10" y="8" fill="currentColor" rx="1"/><path fill="currentColor" d="M9.5 13.5h13c0 5.2-2.6 11.3-6.5 17.5-3.9-6.2-6.5-12.3-6.5-17.5Z"/></svg>
                        <span class="font-display text-[1.375rem] font-extrabold tracking-tight [font-stretch:125%]">{{ $site->short_name }}</span>
                    @endif
                </a>
                <p class="mt-5 max-w-[36ch] text-base text-pretty text-canvas/70">{{ $blurb }}</p>
                <p class="mt-6 text-sm text-canvas/60">{{ $site->license }}</p>
            </div>
            <nav aria-label="Footer" class="md:col-span-3">
                <ul role="list" class="flex flex-col gap-1">
                    @foreach ($links as $link)
                        <li><a href="{{ $link->href }}" class="inline-flex min-h-10 items-center text-base text-canvas/80 hover:text-canvas">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="flex flex-col gap-3 text-base md:col-span-4">
                <a href="{{ $site->phone_href }}" class="font-display text-2xl font-extrabold tabular-nums [font-stretch:125%] hover:text-canvas/80">{{ $site->phone }}</a>
                <a href="mailto:{{ $site->email }}" class="break-all text-canvas/80 hover:text-canvas">{{ $site->email }}</a>
                <p class="text-canvas/70">{{ $site->address }}</p>
            </div>
        </div>
        <div class="mt-16 flex flex-col gap-2 border-t border-canvas/15 pt-6 text-sm text-canvas/60 sm:flex-row sm:justify-between">
            <p>© {{ $copyright }}</p>
            <p>{{ $site->emergency_note }}</p>
        </div>
    </div>
</footer>
