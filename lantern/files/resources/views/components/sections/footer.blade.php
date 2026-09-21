@props(['links', 'note' => 'Lantern is a demonstration company. Swap the name, the number and the service area for your own.'])
<footer class="border-t border-deep-muted/20 bg-deep text-deep-ink">
    <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20">
        <div class="grid gap-12 lg:grid-cols-[2fr_1fr_1fr] lg:gap-8">
            <div>
                <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 font-display text-lg font-semibold tracking-tight text-deep-ink hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <svg viewBox="0 0 28 32" fill="currentColor" class="h-6 w-auto shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M14 1.5 27.5 13.5H.5L14 1.5ZM5.5 16h17L20 31H8L5.5 16Zm5.5 4h6v6h-6v-6Z"/></svg>
                    {{ $site->short_name }}
                </a>
                <p class="mt-5 max-w-[46ch] text-base/7 text-deep-muted">{{ $site->license }}. Serving {{ $site->service_area }}.</p>
            </div>
            <div>
                <h2 class="font-display text-sm font-semibold text-deep-ink">What we do</h2>
                <ul role="list" class="mt-5 flex flex-col gap-3">
                    @foreach ($links as $link)
                        <li class="text-base/6 sm:text-sm/6"><a href="{{ $link->url }}" class="font-normal text-deep-muted hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="font-display text-sm font-semibold text-deep-ink">Reach us</h2>
                <ul role="list" class="mt-5 flex flex-col gap-3">
                    <li class="text-base/6 sm:text-sm/6"><a href="{{ $site->phone_href }}" class="font-normal text-deep-muted tabular-nums hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $site->phone }}</a></li>
                    <li class="text-base/6 sm:text-sm/6"><a href="mailto:{{ $site->email }}" class="font-normal text-deep-muted hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $site->email }}</a></li>
                    <li class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->address }}</li>
                    <li class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->hours_note }}</li>
                </ul>
            </div>
        </div>
        <div class="mt-16 flex flex-wrap items-center justify-between gap-4 border-t border-deep-muted/25 pt-6">
            <p class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->name }}</p>
            <p class="max-w-[62ch] text-base/6 text-deep-muted sm:text-sm/6">{{ $note }}</p>
        </div>
    </div>
</footer>
