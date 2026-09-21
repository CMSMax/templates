@props([
    'headingLead' => 'Move like',
    'headingTail' => 'yourself again.',
    'body' => 'Chiropractic care for neck pain, back pain and sciatica in Springfield. Thirty-minute visits, a plan you can read, and a doctor who tells you how many visits it should take — then sticks to it.',
    'chipImage' => '/images/stretch.jpg',
    'image' => '/images/treatment.jpg',
    'imageAlt' => 'A chiropractor in an indigo scrub top adjusting the upper back of a patient lying on a treatment table',
])
<section class="pt-12 sm:pt-16 lg:pt-20">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-end lg:gap-8">
            <h1 class="font-display text-[clamp(3.5rem,11vw,9.5rem)] leading-[0.88] font-semibold tracking-[-0.025em] text-ink lg:col-span-8">
                <span data-rise class="block">{{ $headingLead }}
                    <span class="relative inline-block h-[0.74em] w-[1.7em] translate-y-[0.02em] overflow-hidden rounded-full bg-surface align-baseline outline-1 -outline-offset-1 outline-ink/10" aria-hidden="true"><img src="{{ $chipImage }}" alt="" width="1168" height="880" class="absolute inset-0 size-full object-cover object-[46%_30%]"></span></span>
                <span data-rise class="block [--i:1]">{{ $headingTail }}</span>
            </h1>
            <div data-rise class="[--i:2] lg:col-span-4 lg:pb-3">
                <p class="max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="/care" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"><span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">See care &amp; pricing</span></a>
                </div>
            </div>
        </div>

        <img data-rise src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="mt-12 aspect-[3/2] w-full rounded-[1.5rem] object-cover object-[50%_60%] outline-1 -outline-offset-1 outline-ink/5 [--i:3] sm:aspect-[2/1] lg:mt-16 lg:aspect-[5/2]">

        <dl class="mt-12 grid border-y border-line sm:grid-cols-3 lg:mt-16 lg:grid-cols-[3fr_4fr_3fr]">
            <div class="flex flex-col gap-1 py-5 max-sm:border-b max-sm:border-line sm:pr-6">
                <dt class="text-sm text-muted">Call the front desk</dt>
                <dd><a href="{{ $site->phone_href }}" class="rounded-sm font-display text-[1.75rem] leading-8 font-semibold text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a></dd>
            </div>
            <div class="flex flex-col gap-1 py-5 max-sm:border-b max-sm:border-line sm:border-l sm:border-line sm:px-6">
                <dt class="text-sm text-muted">Open</dt>
                <dd class="text-base/7 font-medium text-ink">{{ $site->hours_short }}</dd>
            </div>
            <div class="flex flex-col gap-1 py-5 sm:border-l sm:border-line sm:pl-6">
                <dt class="text-sm text-muted">Find us</dt>
                <dd class="text-base/7 font-medium text-ink"><a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-ink/25 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->address }}, {{ $site->city }}</a></dd>
            </div>
        </dl>
    </div>
</section>
