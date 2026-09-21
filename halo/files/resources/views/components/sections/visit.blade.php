@props([
    'eyebrow' => 'Visit',
    'heading' => 'Save yourself',
    'headingAccent' => 'a seat.',
    'body' => 'Book online in a minute, or call and a real person will find you a time. New clients are always welcome.',
    'hoursHeading' => 'Opening hours',
])
<section id="book" aria-labelledby="visit-heading" class="scroll-mt-8 px-3 py-3 sm:px-5 sm:py-5">
    <div class="mx-auto grid max-w-[88rem] gap-14 rounded-[2rem] bg-secondary px-5 py-16 text-secondary-foreground sm:px-10 sm:py-20 lg:grid-cols-12 lg:gap-10 lg:rounded-[2.5rem] lg:px-16 lg:py-24">
        <div class="lg:col-span-6">
            <p class="text-xs font-semibold tracking-[0.22em] text-secondary-foreground/70 uppercase">{{ $eyebrow }}</p>
            <h2 id="visit-heading" class="mt-5 font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.98] tracking-[-0.03em]">{{ $heading }} <em class="block italic">{{ $headingAccent }}</em></h2>
            <p class="mt-7 max-w-[42ch] text-lg/8 text-secondary-foreground/80">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                <a href="{{ $site->booking_link }}" class="rounded-full bg-secondary-foreground px-7 py-4 text-base font-semibold text-secondary transition-colors duration-150 hover:bg-secondary-foreground/90 active:bg-secondary-foreground/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">
                    <span class="underline decoration-secondary-foreground/30 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-secondary-foreground">Call {{ $site->phone }}</span>
                </a>
            </div>
            <ul role="list" class="mt-12 flex flex-col gap-3 border-t border-secondary-foreground/15 pt-8 text-sm/6 text-secondary-foreground/80">
                @foreach ($site->booking_policy as $item)
                    <li class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="currentColor" class="mt-1.5 size-3 shrink-0" aria-hidden="true"><path d="M6 0l1.4 4.6L12 6l-4.6 1.4L6 12l-1.4-4.6L0 6l4.6-1.4Z"/></svg>
                        {{ $item->text }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="lg:col-span-5 lg:col-start-8">
            <h3 class="font-display text-2xl italic">{{ $hoursHeading }}</h3>
            <dl class="mt-6 border-t border-secondary-foreground/25">
                @foreach ($hours as $row)
                    <div class="flex items-baseline justify-between gap-6 border-b border-secondary-foreground/15 py-4">
                        <dt class="text-base">{{ $row->day }}</dt>
                        <dd class="text-base text-secondary-foreground/80 tabular-nums">{{ $row->time }}</dd>
                    </div>
                @endforeach
            </dl>
            <div class="mt-10 grid gap-8 sm:grid-cols-2">
                <div>
                    <h3 class="text-xs font-semibold tracking-[0.18em] text-secondary-foreground/70 uppercase">Find us</h3>
                    <p class="mt-3 text-base/7">{{ $site->address }}<br>{{ $site->city }}</p>
                    <a href="{{ $site->directions_url }}" class="mt-2 inline-block rounded-sm text-sm font-semibold underline decoration-secondary-foreground/30 underline-offset-4 hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">Get directions</a>
                </div>
                <div>
                    <h3 class="text-xs font-semibold tracking-[0.18em] text-secondary-foreground/70 uppercase">Get in touch</h3>
                    <p class="mt-3 text-base/7"><a href="{{ $site->phone_href }}" class="rounded-sm hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->phone }}</a><br><a href="mailto:{{ $site->email }}" class="rounded-sm hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->email }}</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
