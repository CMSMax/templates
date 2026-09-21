@props([
    'eyebrow' => 'What progress can feel like',
    'heading' => 'Not a breakthrough.',
    'headingItalic' => 'A better Tuesday.',
    'body' => 'Change in therapy rarely looks dramatic. It shows up in ordinary moments that used to be hard — here are a few people tend to notice first.',
])
<section aria-labelledby="progress-heading" class="py-24 lg:py-32">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div class="lg:sticky lg:top-10 lg:self-start">
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 id="progress-heading" class="mt-4 text-[clamp(2.25rem,4.6vw,3.75rem)] leading-[1.02] text-ink">
                <span class="block font-sans font-medium tracking-[-0.04em]">{{ $heading }}</span>
                <span class="block font-display font-light tracking-[-0.025em] italic">{{ $headingItalic }}</span>
            </h2>
            <p class="mt-6 max-w-[42ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="border-t border-ink">
            @foreach ($site->progress as $moment)
                <li class="grid grid-cols-[2.5rem_1fr] gap-x-4 border-b border-line py-8 sm:grid-cols-[3.5rem_1fr]">
                    <span class="font-display text-2xl leading-8 font-light text-muted italic tabular-nums" aria-hidden="true">{{ $loop->iteration }}.</span>
                    <div>
                        <h3 class="font-display text-[clamp(1.375rem,2.4vw,1.875rem)] leading-[1.2] tracking-[-0.01em] text-ink">{{ $moment->title }}</h3>
                        <p class="mt-2 text-base/7 text-muted">{{ $moment->body }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
