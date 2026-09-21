@props([
    'heading' => 'Plan your visit',
    'headingEmphasis' => 'we saved you a seat.',
    'body' => 'Everything you might wonder before walking in for the first time — when to come, where to park, what happens, and what to do with the children.',
])
<section class="pt-16 pb-16 sm:pt-20 lg:pt-28 lg:pb-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <h1 class="font-display text-[clamp(2.75rem,6.4vw,5rem)] leading-[1.03] font-normal tracking-[-0.025em] text-balance text-ink">
            <span class="block">{{ $heading }}</span>
            <span class="block text-primary italic">{{ $headingEmphasis }}</span>
        </h1>
        <p class="mt-7 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
    </div>
</section>
