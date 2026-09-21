@props([
    'eyebrow' => 'Book a clean',
    'heading' => 'Tell us about your home. We will give you a fixed price on the call.',
    'body' => 'Most first cleans are booked within the week. Have the number of bedrooms and bathrooms handy, and anything you would like us to know.',
    'emailLabel' => 'Or email us',
    'image' => '/images/cleaning-caddy.jpg',
    'imageAlt' => 'A cleaning caddy with refillable spray bottles, blue cloths, a wooden brush and yellow gloves on an oak floor.',
])
<section id="book" class="pb-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid overflow-hidden rounded-[2rem] bg-secondary text-secondary-foreground lg:grid-cols-12">
            <div class="p-7 py-12 sm:p-12 lg:col-span-7 lg:p-16">
                <p class="flex items-center gap-2.5 text-[0.9375rem] font-medium text-secondary-foreground/75">
                    <span class="size-2 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>{{ $eyebrow }}
                </p>
                <h2 class="mt-5 max-w-[20ch] font-display text-4xl font-semibold tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-secondary-foreground/75">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                    <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2.5 rounded-full bg-primary py-3.5 pr-6 pl-5 font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4.5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"/></svg>
                        <span class="tabular-nums">Call {{ $site->phone }}</span>
                    </a>
                    <a href="mailto:{{ $site->email }}" class="group inline-flex items-center gap-2 py-2 font-medium focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-secondary-foreground/30 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-secondary-foreground">{{ $emailLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg>
                    </a>
                </div>
                <dl class="mt-12 grid gap-6 border-t border-secondary-foreground/15 pt-8 sm:grid-cols-2">
                    <div>
                        <dt class="text-[0.9375rem] text-secondary-foreground/75">Where we clean</dt>
                        <dd class="mt-1 font-medium">{{ $site->service_area }}</dd>
                    </div>
                    <div>
                        <dt class="text-[0.9375rem] text-secondary-foreground/75">When</dt>
                        <dd class="mt-1 font-medium">{{ $site->hours_note }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="sr-only">How quickly we reply</dt>
                        <dd class="max-w-[60ch] text-[0.9375rem]/6 text-pretty text-secondary-foreground/75">{{ $site->response_note }}</dd>
                    </div>
                </dl>
            </div>
            <div class="relative min-h-72 lg:col-span-5 lg:min-h-full">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="absolute inset-0 size-full object-cover">
            </div>
        </div>
    </div>
</section>
