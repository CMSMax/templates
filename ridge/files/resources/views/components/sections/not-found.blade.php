@props([
    'heading' => 'Nothing on the radar here.',
    'body' => "The page you're after isn't here. It may have moved, or the link was mistyped.",
    'homeLabel' => 'Back to the homepage',
    'workLabel' => 'See recent roofs',
])
<section class="py-24 md:py-40">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <p class="font-display text-[clamp(6rem,22vw,16rem)] leading-none font-semibold tracking-tight text-line" aria-hidden="true">404</p>
        <h1 class="mt-6 max-w-[18ch] font-display text-section font-semibold text-balance">{{ $heading }}</h1>
        <p class="mt-5 max-w-[44ch] text-lg text-pretty text-muted">{{ $body }}</p>
        <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
            <a href="/" class="inline-flex min-h-13 items-center rounded-md bg-primary px-5 py-3 text-base font-semibold text-primary-foreground hover:bg-primary/85">{{ $homeLabel }}</a>
            <a href="/projects" class="inline-flex min-h-12 items-center text-base font-semibold underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink">{{ $workLabel }}</a>
        </div>
    </div>
</section>
