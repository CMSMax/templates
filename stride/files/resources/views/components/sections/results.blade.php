@props([
    'heading' => 'What patients say',
])
<section aria-labelledby="results-heading" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
        <figure>
            <h2 id="results-heading" class="text-sm font-semibold text-muted">{{ $heading }}</h2>
            <blockquote class="mt-6 font-display text-[clamp(1.625rem,3vw,2.375rem)] leading-[1.2] font-medium tracking-[-0.025em] text-ink">
                <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $site->testimonial->quote }}</p>
            </blockquote>
            <figcaption class="mt-8 flex items-center gap-4">
                <span class="h-2 w-6 shrink-0 rounded-full bg-primary ring-1 ring-ink/15 ring-inset" aria-hidden="true"></span>
                <span class="text-base"><span class="font-semibold text-ink">{{ $site->testimonial->name }}</span> <span class="text-muted">· {{ $site->testimonial->detail }}</span></span>
            </figcaption>
        </figure>
        <dl class="flex flex-col border-t border-ink lg:mt-12">
            @foreach ($site->stats as $stat)
                <div class="flex items-baseline justify-between gap-6 border-b border-line py-6">
                    <dt class="max-w-[22ch] text-base/6 text-muted">{{ $stat->label }}</dt>
                    <dd class="shrink-0 font-display text-4xl font-semibold tracking-[-0.04em] text-ink">{{ $stat->value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
