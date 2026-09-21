@props([
    'lineOne' => 'Clean dogs.',
    'lineTwo' => 'Tired dogs.',
    'lineThree' => 'Happy dogs.',
    'body' => 'Grooming, daycare and overnight boarding on a half-acre yard in Riverside. Your dog gets a bath, a best friend, and a nap. You get a report card at pick-up.',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A freshly groomed apricot doodle sitting on a gravel park path beside a tennis ball.',
])
<section class="relative overflow-hidden">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 pt-6 pb-20 sm:px-8 lg:grid-cols-12 lg:gap-16 lg:pt-10 lg:pb-28">
        <div class="flex flex-col gap-8 lg:col-span-7">
            <h1 class="isolate font-display text-[clamp(3rem,8.5vw,6rem)] leading-[0.92] font-extrabold tracking-[-0.035em] text-ink">
                <span data-rise class="block [--i:0]">{{ $lineOne }}</span>
                <span data-rise class="block [--i:1]">{{ $lineTwo }}</span>
                <span data-rise class="block [--i:2]"><span class="relative whitespace-nowrap"><span class="absolute inset-x-[-0.08em] bottom-[0.06em] -z-10 h-[0.4em] -rotate-1 rounded-full bg-primary" aria-hidden="true"></span>{{ $lineThree }}</span></span>
            </h1>
            <p data-rise class="max-w-[34rem] text-lg/8 text-muted [--i:3]">{{ $body }}</p>
            <div data-rise class="flex flex-wrap items-center gap-x-6 gap-y-4 [--i:4]">
                <a href="{{ $site->cta_link }}" class="group inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 font-display text-lg font-extrabold text-primary-foreground transition-colors duration-150 hover:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">
                    {{ $site->cta_label }}
                    <x-icon name="arrow" class="size-5 transition-transform duration-200 group-hover:translate-x-0.5"/>
                </a>
                <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2 rounded-sm text-base font-bold text-ink underline decoration-ink/30 underline-offset-[6px] transition-colors duration-150 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">
                    <x-icon name="phone" class="size-5"/>
                    Call {{ $site->phone }}
                </a>
            </div>
            <ul role="list" data-rise class="flex flex-wrap gap-x-6 gap-y-2 border-t border-line pt-6 text-[0.9375rem] font-bold text-ink [--i:5]">
                @foreach ($site->hero_facts as $fact)
                    <li class="flex items-center gap-2"><x-icon name="check" class="size-4 shrink-0 text-secondary"/>{{ $fact }}</li>
                @endforeach
            </ul>
        </div>
        <div class="relative lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="880" height="1168" fetchpriority="high" class="aspect-[4/5] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/10 sm:aspect-[5/6] lg:aspect-[3/4]">
            <div data-swing class="absolute -bottom-7 left-4 sm:left-8 lg:top-14 lg:bottom-auto lg:-left-14">
                <div class="sign-plate relative flex w-52 flex-col items-center gap-1 px-6 pt-7 pb-6 text-center">
                    <span class="rivet absolute top-4 left-5" aria-hidden="true"></span>
                    <span class="rivet absolute top-4 right-5" aria-hidden="true"></span>
                    <p class="font-display text-xl font-extrabold tracking-tight">{{ $site->hours_sign }}</p>
                    <p class="font-display text-base font-bold text-primary tabular-nums">{{ $site->hours_short }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
