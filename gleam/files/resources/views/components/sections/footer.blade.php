@props([
    'blurb' => 'Regular, deep and move-out cleaning by insured cleaners we employ ourselves. Same cleaner, fixed prices, and a checklist you can hold us to.',
    'note' => 'Insured, bonded and background-checked.',
])
<footer class="border-t border-line">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-16 sm:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1fr] lg:px-8 lg:py-20">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-md text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
                @else
                    <span class="grid size-6 shrink-0"><x-sections.mark/></span>
                    <span class="font-display text-xl font-semibold tracking-tight">{{ $site->wordmark }}</span>
                @endif
            </a>
            <p class="mt-5 max-w-[40ch] text-base/7 text-pretty text-muted sm:text-sm/6">{{ $blurb }}</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Cleaning</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="/services" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Services and prices</a></li>
                <li><a href="/#clean-facts" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">What’s included</a></li>
                <li><a href="/services#questions" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Questions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Where we clean</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->service_area }}</li>
                <li>{{ $site->hours_note }}</li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="tabular-nums hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="break-all hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->email }}</a></li>
                <li><a href="{{ $site->cta_href }}" class="font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-line">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-6 py-8 text-sm/6 text-muted sm:flex-row sm:justify-between lg:px-8">
            <p>© {{ $site->name }}, {{ $site->city }}</p>
            <p>{{ $note }}</p>
        </div>
    </div>
</footer>
