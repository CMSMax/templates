@props([
    'heading' => 'Found something',
    'headingAccent' => 'you like?',
    'body' => 'Book online, or call and we will match you with the right person.',
])
<section aria-labelledby="cta-heading" class="py-20 sm:py-24 lg:py-28">
    <div class="mx-auto flex max-w-4xl flex-col items-center px-5 text-center sm:px-8">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-10 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 27V14.5a6.5 6.5 0 0 1 13 0V27Zm2.5-2.5V14.5a4 4 0 0 1 8 0v10Z"/><path d="M25 3.5l.9 2.1 2.1.9-2.1.9-.9 2.1-.9-2.1-2.1-.9 2.1-.9Z"/></svg>
        <h2 id="cta-heading" class="mt-8 font-display text-[clamp(2.5rem,5.5vw,4.5rem)] leading-[1.02] tracking-[-0.025em] text-ink">{{ $heading }} <em class="text-primary italic">{{ $headingAccent }}</em></h2>
        <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-x-7 gap-y-4">
            <a href="{{ $site->booking_link }}" class="rounded-full bg-primary px-7 py-4 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"><span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">Call {{ $site->phone }}</span></a>
        </div>
    </div>
</section>
