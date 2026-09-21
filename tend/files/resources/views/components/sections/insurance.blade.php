@props([
    'heading' => 'Insurance & the',
    'headingItalic' => 'sliding scale.',
])
<section aria-labelledby="insurance-heading" class="border-t border-line bg-card py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <h2 id="insurance-heading" class="text-[clamp(2.25rem,4.6vw,3.75rem)] leading-[1.02] text-ink">
            <span class="block font-sans font-medium tracking-[-0.04em]">{{ $heading }}</span>
            <span class="block font-display font-light tracking-[-0.025em] italic">{{ $headingItalic }}</span>
        </h2>
        <div class="mt-14 grid gap-10 md:grid-cols-3 md:gap-8">
            @foreach ($site->insurance as $option)
                <div class="border-t border-ink pt-6">
                    <h3 class="text-lg font-semibold tracking-tight text-ink">{{ $option->title }}</h3>
                    <p class="mt-3 text-base/7 text-muted">{{ $option->body }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
