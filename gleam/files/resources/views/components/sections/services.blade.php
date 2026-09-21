@props([
    'eyebrow' => 'Services and prices',
    'heading' => 'Four kinds of clean, each with a starting price.',
    'body' => 'Every price is for a two-bedroom home and confirmed before we book. No hourly rates, nothing added at the door.',
    'linkLabel' => 'Compare every service',
    'items' => [],
])
<section class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-4">
                <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[16ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <a href="/services" class="group mt-8 inline-flex items-center gap-2 py-2 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg>
                </a>
            </div>
            <ul role="list" class="border-t-2 border-ink lg:col-span-8">
                @foreach ($items as $service)
                    <li class="border-b border-line">
                        <a href="/services#{{ $service->slug }}" class="group flex items-start gap-6 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:items-center sm:gap-10 sm:py-8">
                            <span class="min-w-0 flex-1">
                                <span class="block font-display text-2xl font-semibold tracking-tight text-ink underline decoration-transparent decoration-2 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary sm:text-3xl">{{ $service->name }}</span>
                                <span class="mt-2 block max-w-[48ch] text-base/7 text-pretty text-muted">{{ $service->summary }}</span>
                                <span class="mt-3 flex items-center gap-2 text-[0.9375rem] text-muted sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>{{ $service->duration }}
                                </span>
                            </span>
                            <span class="flex w-36 shrink-0 items-center gap-2 text-[0.9375rem] text-muted max-sm:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>{{ $service->duration }}
                            </span>
                            <span class="shrink-0 text-right sm:w-28">
                                <span class="block text-[0.8125rem] text-muted">from</span>
                                <span class="block font-display text-2xl font-semibold tracking-tight text-ink tabular-nums sm:text-3xl">{{ $service->price }}</span>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
