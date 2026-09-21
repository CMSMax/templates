@props([
    'heading' => 'Book a visit.',
    'body' => 'Call or text and we will find a time for a free meet-and-greet, usually within the week.',
])
<section aria-labelledby="cta-heading" class="bg-primary text-primary-foreground">
    <div class="mx-auto grid max-w-6xl items-end gap-10 px-5 py-20 sm:px-8 lg:grid-cols-12 lg:gap-16 lg:py-24">
        <h2 id="cta-heading" class="font-display text-[clamp(3.25rem,10vw,7.5rem)] leading-[0.9] font-extrabold tracking-[-0.04em] lg:col-span-8">{{ $heading }}</h2>
        <div class="flex flex-col gap-6 lg:col-span-4 lg:pb-3">
            <p class="text-lg/8">{{ $body }}</p>
            <a href="{{ $site->phone_href }}" class="group inline-flex items-center justify-between gap-4 self-start rounded-full bg-secondary py-4 pr-4 pl-7 font-display text-xl font-extrabold text-secondary-foreground transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">
                {{ $site->phone }}
                <span class="grid size-9 place-items-center rounded-full bg-primary text-primary-foreground transition-transform duration-200 group-hover:translate-x-0.5"><x-icon name="phone" class="size-4"/></span>
            </a>
        </div>
    </div>
</section>
