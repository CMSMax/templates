@props([
    'heading' => 'Where we work',
    'body' => 'Denver and the first ring of suburbs. If you are close to the line, call us anyway.',
    'hoursHeading' => 'When we answer',
    'image' => '/images/van.jpg',
    'imageAlt' => 'A white plumbing van parked on a leafy street while a plumber carries a toolbox up to a front door.',
])
<section class="py-24 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-6">
            <h2 class="font-display text-section font-extrabold text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[42ch] text-lg text-pretty text-muted">{{ $body }}</p>
            <ul role="list" class="mt-10 flex flex-wrap gap-2">
                @foreach ($site->areas as $area)
                    <li class="flex items-center gap-2 rounded-full bg-surface py-2 pr-4 pl-3 text-base font-medium ring-1 ring-line">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd"/></svg>
                        {{ $area->name }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="flex flex-col gap-10 lg:col-span-5 lg:col-start-8">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" class="aspect-[3/2] w-full rounded-[1.75rem] object-cover">
            <div>
                <h3 class="font-display text-xl font-extrabold md:text-2xl">{{ $hoursHeading }}</h3>
                <dl class="mt-5 border-t border-line">
                    @foreach ($site->hours as $row)
                        <div class="flex items-baseline justify-between gap-6 border-b border-line py-3.5">
                            <dt class="text-base text-muted">{{ $row->days }}</dt>
                            <dd class="text-base font-semibold tabular-nums">{{ $row->time }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</section>
