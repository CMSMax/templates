@props([
    'heading' => 'Give',
    'headingEmphasis' => 'what keeps the doors open.',
    'body' => 'Your gifts keep the doors open, the soup on, and the food pantry stocked for about two hundred families a week. Give in the offering plate on Sunday, by check to the church office, or online.',
])
<section id="giving" aria-labelledby="giving-heading" class="scroll-mt-8 bg-surface py-24 sm:py-28 lg:py-32">
    <div>
        <div class="mx-auto grid max-w-6xl gap-10 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <h2 id="giving-heading" class="font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">
                <span class="block">{{ $heading }}</span>
                <span class="block italic">{{ $headingEmphasis }}</span>
            </h2>
            <div>
                <p class="max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <a href="{{ $site->giving_link }}" class="mt-8 inline-flex rounded-full px-6 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/20 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->giving_link_label }}</a>
            </div>
        </div>
    </div>
</section>
