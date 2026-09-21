@props([
    'heading' => 'Slower visits. Calmer pets.',
    'body' => 'Most of what makes a vet visit frightening is the rush. So we took the rush out: longer appointments, quieter rooms, and a team that explains before it treats.',
    'image' => '/images/approach.jpg',
    'imageAlt' => 'A relaxed tabby cat lying on a blue towel while a veterinarian gently listens with a stethoscope',
])
<section id="approach" aria-labelledby="approach-heading" class="scroll-mt-8 px-3 pb-20 sm:px-5 lg:pb-28">
    <div class="mx-auto max-w-7xl rounded-[2rem] bg-surface py-14 sm:py-20 lg:py-24">
        <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-2 lg:gap-16">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[1.25rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:aspect-[4/3] lg:order-first">
            <div>
                <h2 id="approach-heading" class="font-display text-[clamp(2rem,4vw,3.25rem)] leading-[1.05] font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-5 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
                <ul role="list" class="mt-10 flex flex-col gap-6">
                    @foreach ($site->promises as $promise)
                        <li class="flex gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-5 shrink-0 text-primary" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
                            <p class="text-base/7 text-muted"><span class="font-semibold text-ink">{{ $promise->title }}.</span> {{ $promise->body }}</p>
                        </li>
                    @endforeach
                </ul>
                <figure class="mt-12 border-t border-ink/15 pt-8">
                    <blockquote class="font-display text-xl/8 font-medium tracking-tight text-ink sm:text-2xl/9">
                        <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $site->testimonial->quote }}</p>
                    </blockquote>
                    <figcaption class="mt-5 text-sm/6 text-muted"><span class="font-semibold text-ink">{{ $site->testimonial->name }}</span> · {{ $site->testimonial->pet }}</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
