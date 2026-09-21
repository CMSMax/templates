@props([
    'heading' => 'Twenty minutes, no charge, no obligation.',
    'body' => 'Tell us about your business and your last tax year. You’ll leave the call knowing exactly what we’d do and what it would cost.',
    'phoneLabel' => 'Or call',
])
<section class="bg-secondary text-secondary-foreground">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-24 lg:grid-cols-12 lg:items-end lg:gap-16 lg:px-8 lg:py-32">
        <div class="lg:col-span-7">
            <h2 class="max-w-[16ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance sm:text-5xl lg:text-6xl">{{ $heading }}</h2>
            <p class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-secondary-foreground/75">{{ $body }}</p>
        </div>
        <div class="flex flex-col gap-6 lg:col-span-5 lg:items-end">
            <a href="/contact" class="rounded-md bg-primary px-7 py-4 text-center text-lg font-medium text-primary-foreground transition duration-150 hover:bg-primary/88 active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->cta_label }}</a>
            <p class="text-secondary-foreground/75 lg:text-right">{{ $phoneLabel }} <a href="{{ $site->phone_href }}" class="font-mono text-secondary-foreground tabular-nums underline decoration-secondary-foreground/30 underline-offset-4 hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->phone }}</a></p>
            <p class="max-w-[34ch] text-sm text-secondary-foreground/60 lg:text-right">{{ $site->response_note }}</p>
        </div>
    </div>
</section>
