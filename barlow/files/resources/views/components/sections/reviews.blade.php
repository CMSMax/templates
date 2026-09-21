@props([
    'items' => [],
    'heading' => 'What the regulars say.',
    'body' => 'Most of our chairs are booked by people who have been coming back for years. Here is what a few of them told us.',
])
<section class="border-t border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-[5fr_7fr] lg:gap-24">
        <div class="lg:sticky lg:top-32 lg:self-start">
            <h2 class="max-w-[12ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <div class="mt-10 flex items-center gap-5 border-t border-line pt-8">
                <p class="font-display text-7xl font-semibold text-ink tabular-nums">{{ $site->rating }}</p>
                <div>
                    <div class="flex gap-0.5 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                    </div>
                    <p class="mt-2 text-sm text-muted">{{ $site->rating_note }}</p>
                </div>
            </div>
        </div>
        <ul role="list" class="divide-y divide-line">
            @foreach ($items as $review)
                <li class="py-10 first:pt-0 last:pb-0">
                    <figure>
                        <blockquote class="font-display text-3xl leading-[1.15] font-medium text-pretty text-ink sm:text-4xl">
                            <p class="relative before:absolute before:-translate-x-full before:text-primary before:content-['\201C'] after:text-primary after:content-['\201D']">{{ $review->quote }}</p>
                        </blockquote>
                        <figcaption class="mt-6 flex flex-wrap items-center gap-x-3 gap-y-1 text-base">
                            <span class="font-semibold text-ink">{{ $review->name }}</span>
                            <span class="text-line" aria-hidden="true">/</span>
                            <span class="text-muted">{{ $review->note }}</span>
                        </figcaption>
                    </figure>
                </li>
            @endforeach
        </ul>
    </div>
</section>
