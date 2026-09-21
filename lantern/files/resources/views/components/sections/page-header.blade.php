@props([
    'heading' => 'Services',
    'intro' => '',
])
<section class="border-b border-line py-16 lg:py-24">
    <div class="mx-auto max-w-6xl px-6">
        <h1 class="max-w-[18ch] font-display text-[clamp(2.25rem,5vw,4rem)]/[1.03] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h1>
        <p class="mt-5 max-w-[48ch] text-[1.0625rem]/7 text-muted">{{ $intro }}</p>
    </div>
</section>
