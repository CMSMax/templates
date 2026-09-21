@props([
    'eyebrow' => 'Available homes',
    'heading' => 'Homes we are leasing now.',
    'body' => 'Every home is inspected, cleaned, and photographed by our team before it is listed. Apply online in about fifteen minutes.',
    'applyLabel' => 'Apply for this home',
    'items' => [],
])
<section class="pt-12 pb-20 sm:pt-16 lg:pt-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-sm font-medium text-muted">{{ $eyebrow }} · {{ $site->city }}</p>
        <h1 class="mt-4 max-w-[16ch] font-display text-[2.625rem] font-medium tracking-tight text-balance sm:text-6xl">{{ $heading }}</h1>
        <p class="mt-5 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        <ul role="list" class="mt-14 grid gap-x-8 gap-y-14 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $home)
                <li class="flex flex-col">
                    <img src="{{ $home->image }}" alt="{{ $home->alt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-[min(2vw,1.25rem)] object-cover outline-1 -outline-offset-1 outline-black/10">
                    <div class="mt-5 flex items-start justify-between gap-4">
                        <div>
                            <h2 class="font-display text-2xl font-medium tracking-tight">{{ $home->title }}</h2>
                            <p class="mt-1 text-muted">{{ $home->neighborhood }}</p>
                        </div>
                        <p class="shrink-0 text-right font-display text-2xl font-medium tracking-tight tabular-nums">{{ $home->rent }}<span class="block font-sans text-sm font-normal tracking-normal text-muted">per month</span></p>
                    </div>
                    <dl class="mt-5 flex flex-wrap gap-x-5 gap-y-1 border-y border-ink/10 py-3 text-sm text-ink/80 tabular-nums">
                        <div><dt class="sr-only">Bedrooms</dt><dd>{{ $home->beds }}</dd></div>
                        <div><dt class="sr-only">Bathrooms</dt><dd>{{ $home->baths }}</dd></div>
                        <div><dt class="sr-only">Size</dt><dd>{{ $home->size }}</dd></div>
                        <div class="ml-auto"><dt class="sr-only">Availability</dt><dd class="font-medium text-ink">{{ $home->available }}</dd></div>
                    </dl>
                    <p class="mt-4 text-base/7 text-pretty text-muted">{{ $home->summary }}</p>
                    <p class="mt-5"><a href="{{ $site->apply_url }}" class="group inline-flex items-center gap-1.5 rounded-md font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $applyLabel }}<span class="sr-only">: {{ $home->title }}</span><svg viewBox="0 0 16 16" fill="currentColor" class="size-4 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg></a></p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
