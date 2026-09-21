@props([
    'heading' => 'Not on the plans.',
    'body' => "The page you're after isn't here. It may have moved, or the link was drawn wrong.",
    'homeLabel' => 'Back to the homepage',
    'workLabel' => 'See finished projects',
])
<section class="py-24 md:py-40">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <p class="font-display text-[clamp(6rem,24vw,18rem)] leading-[0.8] font-extrabold text-line" aria-hidden="true">404</p>
        <h1 class="mt-6 font-display text-section font-extrabold uppercase">{{ $heading }}</h1>
        <p class="mt-5 max-w-[44ch] text-lg text-pretty text-muted">{{ $body }}</p>
        <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
            <a href="/" class="inline-flex min-h-13 items-center bg-primary px-6 py-3 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-ink hover:text-canvas">{{ $homeLabel }}</a>
            <a href="/projects" class="inline-flex min-h-12 items-center border-b-2 border-ink text-base font-semibold transition-colors duration-150 hover:border-primary">{{ $workLabel }}</a>
        </div>
    </div>
</section>
