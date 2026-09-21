@props(['note' => 'Licensed property management firm. Equal housing opportunity.'])
<footer class="bg-ink text-canvas">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-10 lg:px-8">
        <div class="flex flex-col gap-12 lg:flex-row lg:justify-between">
            <div>
                <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-md focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-7 w-auto">
                    @else
                        <span class="grid size-7 shrink-0"><x-sections.mark/></span>
                        <span class="font-display text-2xl font-medium tracking-tight">{{ $site->wordmark }}</span>
                    @endif
                </a>
                <p class="mt-4 max-w-[32ch] text-canvas/70">{{ $site->tagline }} Serving {{ $site->service_area }}.</p>
            </div>
            <div class="grid gap-10 sm:grid-cols-3 sm:gap-16">
                <div>
                    <h2 class="text-sm font-medium text-canvas/60">Owners</h2>
                    <ul role="list" class="mt-4 flex flex-col gap-3">
                        <li><a href="/#services" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Services</a></li>
                        <li><a href="/#fees" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Fees</a></li>
                        <li><a href="{{ $site->cta_link }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-canvas/60">Residents</h2>
                    <ul role="list" class="mt-4 flex flex-col gap-3">
                        <li><a href="{{ $site->resident_portal_url }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Pay rent</a></li>
                        <li><a href="{{ $site->maintenance_url }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Request a repair</a></li>
                        <li><a href="/rentals" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Available homes</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-canvas/60">Contact</h2>
                    <ul role="list" class="mt-4 flex flex-col gap-3">
                        <li><a href="{{ $site->phone_href }}" class="tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->phone }}</a></li>
                        <li><a href="{{ $site->email_href }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->email }}</a></li>
                        <li class="text-canvas/70">{{ $site->address }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="mt-16 border-t border-canvas/12 pt-8 text-sm text-canvas/60">© {{ $site->name }} · {{ $note }}</p>
    </div>
</footer>
