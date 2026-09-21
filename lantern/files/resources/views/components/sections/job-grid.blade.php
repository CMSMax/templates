@props(['items'])
<section class="border-b border-line py-16 lg:py-24">
    <ul role="list" class="mx-auto grid max-w-6xl gap-8 px-6 lg:grid-cols-2">
        @foreach ($items as $job)
            <li>
                <figure>
                    <img src="{{ $job->image }}" alt="{{ $job->imageAlt }}" width="1400" height="1050" loading="lazy" decoding="async" class="aspect-4/3 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5">
                    <figcaption class="mt-5 border-t border-line pt-4">
                        <p class="text-base/6 text-muted sm:text-sm/6">{{ $job->trade }} — {{ $job->place }} — {{ $job->duration }}</p>
                        <p class="mt-1.5 font-display text-xl font-semibold tracking-tight text-ink">{{ $job->title }}</p>
                        <p class="mt-2 max-w-[52ch] text-base/7 text-muted">{{ $job->note }}</p>
                    </figcaption>
                </figure>
            </li>
        @endforeach
    </ul>
</section>
