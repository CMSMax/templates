@props([
    'heading' => 'A day at Romp, start to finish.',
    'body' => 'Same routine every day, because dogs like knowing what comes next. So do the people who drop them off.',
    'image' => '/images/play.jpg',
    'imageAlt' => 'A border collie and a tan mixed-breed dog racing after a tennis ball across a fenced grassy yard.',
    'quote' => 'Juniper used to pace the house all afternoon. Now she comes home, drinks half the water bowl, and sleeps until dinner. The report card is the best thing I read all week.',
    'quoteName' => 'Dana R.',
    'quotePet' => 'Juniper, two-year-old shepherd mix',
    'items' => [],
])
<section id="day" aria-labelledby="day-heading" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-16">
        <div class="flex flex-col gap-8 lg:col-span-5">
            <div class="flex flex-col gap-5">
                <h2 id="day-heading" class="font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.02] font-extrabold tracking-[-0.03em] text-balance">{{ $heading }}</h2>
                <p class="text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/10">
        </div>
        <div class="lg:col-span-7 lg:pt-2">
            <ol role="list" class="flex flex-col">
                @foreach ($items as $step)
                    <li class="relative grid grid-cols-[4.25rem_1fr] gap-x-4 pb-9 sm:grid-cols-[7rem_1fr] sm:gap-x-8">
                        <p class="pt-0.5 text-right font-display text-lg font-extrabold sm:text-xl tracking-tight text-ink tabular-nums">{{ $step->time }}</p>
                        <div class="relative flex flex-col gap-1.5 pl-6 sm:pl-8">
                            @if (!$loop->last)
                                <span class="absolute top-4 -bottom-9 left-0 w-0.5 bg-line" aria-hidden="true"></span>
                            @endif
                            @if ($loop->last)
                                <span class="absolute top-1.5 left-[-0.4rem] size-4 rounded-full bg-primary ring-4 ring-canvas" aria-hidden="true"></span>
                            @else
                                <span class="absolute top-1.5 left-[-0.4rem] size-4 rounded-full border-2 border-secondary bg-canvas ring-4 ring-canvas" aria-hidden="true"></span>
                            @endif
                            <h3 class="font-display text-xl font-extrabold tracking-tight">{{ $step->title }}</h3>
                            <p class="text-base/7 text-muted">{{ $step->body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
        <figure class="grid gap-6 border-t border-line pt-12 lg:col-span-12 lg:grid-cols-12 lg:gap-16 lg:pt-16">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 32" class="h-10 w-12 fill-secondary lg:col-span-2 lg:justify-self-end" aria-hidden="true"><path d="M0 32V19.2C0 8.6 5.3 2.2 15.9 0l1.8 4.1c-5.6 1.6-8.5 5-8.9 10.1H17V32H0Zm23 0V19.2C23 8.6 28.3 2.2 38.9 0l1.8 4.1c-5.6 1.6-8.5 5-8.9 10.1H40V32H23Z"/></svg>
            <div class="flex flex-col gap-6 lg:col-span-10">
                <blockquote class="font-display text-[clamp(1.625rem,3.2vw,2.5rem)] leading-[1.18] font-bold tracking-[-0.02em] text-ink">
                    <p>{{ $quote }}</p>
                </blockquote>
                <figcaption class="text-base text-muted"><span class="font-bold text-ink">{{ $quoteName }}</span> · {{ $quotePet }}</figcaption>
            </div>
        </figure>
    </div>
</section>
