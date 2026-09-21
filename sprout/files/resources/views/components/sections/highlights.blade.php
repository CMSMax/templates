@props([
    'heading' => 'Every day at Sprout',
    'image' => '/images/blocks.jpg',
    'imageAlt' => 'A toddler stacking natural wooden blocks on a light oak floor',
])
<section aria-labelledby="highlights-heading" class="relative -mt-16 pb-20 sm:-mt-28 lg:-mt-36 lg:pb-28">
    <div class="mx-auto grid max-w-6xl gap-3 px-5 sm:px-8 md:grid-cols-2 lg:grid-cols-3 lg:gap-4">
        <div class="rounded-[2rem] bg-surface p-2">
            <div class="h-full rounded-[1.5rem] bg-card p-7 sm:p-8">
                <h2 id="highlights-heading" class="font-display text-2xl font-medium tracking-tight text-ink sm:text-[1.75rem]">{{ $heading }}</h2>
                <ul role="list" class="mt-6 divide-y divide-line">
                    @foreach ($site->highlights as $item)
                        <li class="flex items-center gap-4 py-3.5 text-base text-ink">
                            <span class="grid size-10 shrink-0 place-items-center rounded-full bg-surface text-ink" aria-hidden="true">
                                @if ($item->icon == 'book')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="M12 5v16m8.001-2A2 2 0 0 0 22 17V5a2 2 0 0 0-1.999-2L16 3.002A5 5 0 0 0 12 5a5 5 0 0 0-4-2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 1.999 2H8a5 5 0 0 1 4 2a5 5 0 0 1 4-2z"/></svg>
                                @elseif ($item->icon == 'sun')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
                                @elseif ($item->icon == 'apple')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="M12 6.528V3a1 1 0 0 1 1-1"/><path d="M18.237 21A15 15 0 0 0 22 11a6 6 0 0 0-10-4.472A6 6 0 0 0 2 11a15.1 15.1 0 0 0 3.763 10a3 3 0 0 0 3.648.648a5.5 5.5 0 0 1 5.178 0A3 3 0 0 0 18.237 21"/></svg>
                                @elseif ($item->icon == 'palette')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="M12 22a1 1 0 0 1 0-20a10 9 0 0 1 10 9a5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z"/><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="M14 9.536V7a4 4 0 0 1 4-4h1.5a.5.5 0 0 1 .5.5V5a4 4 0 0 1-4 4a4 4 0 0 0-4 4c0 2 1 3 1 5a5 5 0 0 1-1 3M4 9a5 5 0 0 1 8 4a5 5 0 0 1-8-4m1 12h14"/></svg>
                                @endif
                            </span>
                            {{ $item->label }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] h-full w-full rounded-[2rem] object-cover max-lg:hidden">
        <figure class="flex flex-col rounded-[2rem] bg-surface p-2">
            <div class="flex flex-1 flex-col rounded-[1.5rem] bg-card p-7 sm:p-8">
                <p class="flex items-center gap-2 font-display text-3xl font-medium text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 shrink-0 text-primary" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"/></svg>
                    {{ $site->rating }}
                    <span class="font-sans text-sm font-normal text-muted">{{ $site->rating_note }}</span>
                </p>
                <blockquote class="mt-6 flex-1 font-display text-xl/8 font-normal text-ink sm:text-[1.375rem]/8">
                    <p>“{{ $site->testimonial->quote }}”</p>
                </blockquote>
                <figcaption class="mt-8 border-t border-line pt-5 text-sm">
                    <span class="block font-semibold text-ink">{{ $site->testimonial->name }}</span>
                    <span class="text-muted">{{ $site->testimonial->role }}</span>
                </figcaption>
            </div>
        </figure>
    </div>
</section>
