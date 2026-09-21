@props([
    'heading' => 'The',
    'headingAccent' => 'menu.',
    'body' => 'Coffee from our own roaster, pastries baked before sunrise, and plates served all day until the kitchen closes.',
])
<section class="pt-12 pb-12 sm:pt-20 lg:pb-16">
    <div class="mx-auto flex max-w-6xl flex-col items-center px-6 text-center">
        <p class="inline-flex items-center gap-2.5 rounded-full bg-surface px-4 py-2 text-sm font-medium text-ink">
            <span class="size-1.5 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
            {{ $site->hours_short }}
        </p>
        <h1 class="mt-7 font-display text-[clamp(2.75rem,7vw,5rem)] leading-[1.02] font-medium tracking-tighter text-balance text-ink">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h1>
        <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
    </div>
</section>
