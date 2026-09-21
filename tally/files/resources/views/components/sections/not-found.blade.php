@props([
    'code' => '404',
    'heading' => 'This page doesn’t add up.',
    'body' => 'The address may have changed, or the page never existed. Everything else is where you left it.',
    'homeLabel' => 'Back to the homepage',
    'contactLabel' => 'Contact us',
])
<section class="paper-rule">
    <div class="mx-auto max-w-7xl px-6 py-28 lg:px-8 lg:py-40">
        <p class="font-mono text-lg text-primary tabular-nums">{{ $code }}</p>
        <h1 class="mt-6 max-w-[16ch] font-display text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.04] font-medium tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
        <p class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
            <a href="/" class="rounded-md bg-primary px-6 py-3.5 font-medium text-primary-foreground transition duration-150 hover:bg-primary/88 active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $homeLabel }}</a>
            <a href="/contact" class="py-2 font-medium text-ink underline decoration-ink/25 underline-offset-[6px] hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $contactLabel }}</a>
        </div>
    </div>
</section>
