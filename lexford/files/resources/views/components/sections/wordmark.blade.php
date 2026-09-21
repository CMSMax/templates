@props([
    'heading' => 'A small firm, by design. Every matter has a partner’s name on it.',
    'body' => 'We keep our client list short so that the attorney you meet is the one who reads every document, takes every call, and stands up in court if it comes to that.',
    'linkLabel' => 'About the firm',
    'image' => '/images/firm-meeting.jpg',
    'imageAlt' => 'Attorneys of the firm in discussion around a long walnut conference table.',
])
<section class="pt-24 lg:pt-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-8 lg:grid-cols-12 lg:gap-x-16">
            <h2 class="font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl lg:col-span-7">{{ $heading }}</h2>
            <div class="lg:col-span-4 lg:col-start-9 lg:self-end">
                <p class="max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <a href="/about" class="group mt-6 inline-flex items-center gap-2 py-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-line underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
        <div class="relative mt-16 overflow-hidden rounded-t-[min(3vw,1.5rem)] bg-line lg:mt-24">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="2000" height="1125" loading="lazy" class="aspect-4/3 w-full object-cover sm:aspect-16/9">
            <p aria-hidden="true" class="absolute inset-x-0 -bottom-[0.02em] px-[0.04em] text-center font-display text-[min(21vw,17.5rem)] leading-[0.74] font-normal tracking-[-0.04em] whitespace-nowrap text-canvas">{{ $site->wordmark }}</p>
        </div>
    </div>
</section>
