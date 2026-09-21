@props(['blurb' => 'A small flower studio arranging what the season gives us, for every day and the days that matter.'])
<footer class="border-t border-line">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-16 sm:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1fr] lg:px-8">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-sm text-ink transition-colors duration-200 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-7 w-auto">
                @else
                    <span class="grid size-5 shrink-0 text-primary"><x-sections.mark/></span>
                    <span class="font-display text-2xl">{{ $site->name }}</span>
                @endif
            </a>
            <p class="mt-4 max-w-[36ch] text-base/7 text-muted sm:text-sm/6">{{ $blurb }}</p>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Studio</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}</li>
                <li>{{ $site->city }}</li>
                <li><a href="{{ $site->map_url }}" class="text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Hours</h2>
            <dl class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div>
                        <dt class="text-ink">{{ $slot->day }}</dt>
                        <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Order</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="font-normal hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="font-normal break-all hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                <li><a href="/arrangements" class="font-normal hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Arrangements</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-line">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-2 px-6 py-6 text-sm text-muted lg:px-8">
            <p>© {{ $site->name }}, {{ $site->city }}</p>
            <p>{{ $site->tagline }}</p>
        </div>
    </div>
</footer>
