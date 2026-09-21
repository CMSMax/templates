@props(['items', 'heading' => 'What families tell us.'])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <h2 class="sr-only">{{ $heading }}</h2>
        @foreach ($items as $testimonial)
            @if ($loop->first)
                <figure class="mx-auto max-w-4xl text-center">
                    <svg viewBox="0 0 48 36" fill="currentColor" class="mx-auto h-8 w-auto text-accent" aria-hidden="true"><path d="M0 36V22C0 9 7 1.5 19 0l2 5c-7 2-10.5 6.5-11 13h9v18H0Zm27 0V22C27 9 34 1.5 46 0l2 5c-7 2-10.5 6.5-11 13h9v18H27Z"/></svg>
                    <blockquote class="mt-8 font-display text-[clamp(1.75rem,3.4vw,2.75rem)]/[1.2] font-normal tracking-[-0.015em] text-balance text-ink">{{ $testimonial->quote }}</blockquote>
                    <figcaption class="mt-8 text-base/6"><span class="font-medium text-ink">{{ $testimonial->name }}</span> <span class="text-muted">· {{ $testimonial->detail }}</span></figcaption>
                </figure>
            @endif
        @endforeach
        <div class="mx-auto mt-16 grid max-w-4xl gap-10 border-t border-line pt-10 sm:grid-cols-2 sm:gap-12">
            @foreach ($items as $testimonial)
                @if ($loop->first)
                @else
                    <figure>
                        <blockquote class="text-lg/8 text-ink">“{{ $testimonial->quote }}”</blockquote>
                        <figcaption class="mt-4 text-[0.9375rem]/6"><span class="font-medium text-ink">{{ $testimonial->name }}</span> <span class="text-muted">· {{ $testimonial->detail }}</span></figcaption>
                    </figure>
                @endif
            @endforeach
        </div>
    </div>
</section>
