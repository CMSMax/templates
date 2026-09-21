@props(['items', 'heading' => 'Taught by teachers.', 'intro' => 'Every tutor holds a teaching credential or a graduate degree in their subject. Your child sees the same one every week.', 'linkLabel' => 'Meet all six tutors', 'linkUrl' => '/tutors'])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-x-12 gap-y-4">
            <h2 class="max-w-[14ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-base/7 text-muted">{{ $intro }}</p>
        </div>
        <div class="mt-14 grid gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.1fr)] lg:gap-16">
            @foreach ($items as $tutor)
                @if ($loop->first)
                    <figure class="lg:row-span-2">
                        <img src="{{ $tutor->image }}" alt="{{ $tutor->imageAlt }}" width="640" height="640" loading="lazy" class="aspect-4/5 w-full rounded-sm object-cover outline-1 -outline-offset-1 outline-ink/8">
                        <blockquote class="mt-7 font-display text-[1.625rem]/[1.3] font-normal tracking-[-0.01em] text-balance text-ink italic">“{{ $tutor->quote }}”</blockquote>
                        <figcaption class="mt-5 text-base/6">
                            <span class="block font-medium text-ink">{{ $tutor->name }}, {{ $tutor->role }}</span>
                            <span class="block text-muted">{{ $tutor->credential }}</span>
                        </figcaption>
                    </figure>
                @endif
            @endforeach
            <div>
                <ul role="list" class="border-t border-ink/80">
                    @foreach ($items as $tutor)
                        @if ($loop->first)
                        @else
                            <li class="flex items-center gap-5 border-b border-line py-5">
                                <img src="{{ $tutor->image }}" alt="{{ $tutor->imageAlt }}" width="640" height="640" loading="lazy" class="size-16 shrink-0 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/8 sm:size-18">
                                <div class="min-w-0 flex-1">
                                    <p class="font-display text-xl font-normal text-ink">{{ $tutor->name }}</p>
                                    <p class="mt-0.5 text-[0.9375rem]/6 text-muted">{{ $tutor->subjects }}</p>
                                </div>
                                <p class="max-w-[22ch] text-right text-sm/5 text-muted max-sm:hidden">{{ $tutor->credential }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <a href="{{ $linkUrl }}" class="mt-8 inline-flex items-center gap-2 font-medium text-ink underline decoration-rule decoration-2 underline-offset-[6px] transition-colors duration-150 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $linkLabel }}</a>
            </div>
        </div>
    </div>
</section>
