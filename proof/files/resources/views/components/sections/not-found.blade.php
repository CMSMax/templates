@props([
    'heading' => 'This page didn’t rise.',
    'body' => 'The link may be old, or the page may have sold out before you got here. The bread is still where you left it.',
])
<section class="overflow-hidden bg-primary text-primary-foreground">
    <div class="px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
        <p class="font-display text-[clamp(6rem,24vw,20rem)] leading-[0.8] tracking-[-0.045em] tabular-nums" aria-hidden="true">404</p>
        <h1 class="mt-12 max-w-[18ch] font-display text-[clamp(2.25rem,4.2vw,3.75rem)] leading-[1.02] tracking-[-0.02em] text-balance">{{ $heading }}</h1>
        <p class="mt-6 max-w-[46ch] text-lg/8 text-primary-foreground/85">{{ $body }}</p>
        <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
            <a href="/" class="bg-primary-foreground px-6 py-4 text-base font-semibold text-primary transition-colors duration-150 hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">Back to the bakery</a>
            <a href="/menu" class="py-3 text-base font-semibold underline decoration-primary-foreground/40 underline-offset-8 transition-colors duration-150 hover:decoration-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">See the menu</a>
        </div>
    </div>
</section>
