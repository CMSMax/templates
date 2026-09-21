@props(['blurb' => 'A small law firm for businesses, families and individuals — clear advice, fixed fees where possible, and one attorney who knows your matter.'])
<footer class="border-t border-line">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-16 sm:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr_1fr] lg:px-8 lg:py-20">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-full text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
                @else
                    <span class="grid size-5 shrink-0 text-primary"><x-sections.mark/></span>
                    <span class="font-display text-2xl tracking-tight">{{ $site->name }}</span>
                @endif
            </a>
            <p class="mt-5 max-w-[38ch] text-base/7 text-pretty text-muted sm:text-sm/6">{{ $blurb }}</p>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">The firm</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="/practice-areas" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Practice areas</a></li>
                <li><a href="/about" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">About</a></li>
                <li><a href="/contact" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Office</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}</li>
                <li>{{ $site->city }}</li>
                <li><a href="{{ $site->map_url }}" class="text-ink underline decoration-line underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Contact</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="break-all hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
                <li>{{ $site->hours_note }}</li>
            </ul>
        </div>
    </div>
    <div class="border-t border-line">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm/6 text-muted lg:flex-row lg:items-start lg:justify-between lg:gap-16 lg:px-8">
            <p class="shrink-0">© {{ $site->name }}, {{ $site->city }}</p>
            <p class="max-w-[90ch] text-pretty lg:text-right">{{ $site->disclaimer }}</p>
        </div>
    </div>
</footer>
