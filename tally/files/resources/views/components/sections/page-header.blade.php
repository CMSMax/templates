@props([
    'heading' => 'Services and fees',
    'body' => 'Everything a small business or a family needs from an accountant, each with a fee you’ll know before we start.',
])
<section class="paper-rule border-b border-line">
    <div class="mx-auto max-w-7xl px-6 pt-20 pb-16 lg:px-8 lg:pt-28 lg:pb-20">
        <h1 class="max-w-[16ch] font-display text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.04] font-medium tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
        <p class="mt-7 max-w-[50ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
    </div>
</section>
