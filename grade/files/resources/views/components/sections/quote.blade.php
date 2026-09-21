@props([
    'heading' => "Let's walk your site.",
    'body' => "Tell us what you want to build. We'll come out within the week, measure up, and send a fixed line-item quote.",
    'ctaLabel' => 'Email for a quote',
    'subject' => 'Quote request',
])
<section id="quote" class="bg-primary py-20 text-primary-foreground md:py-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-7">
            <h2 class="font-display text-section font-extrabold uppercase text-balance">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg text-pretty md:text-xl">{{ $body }}</p>
            <a href="mailto:{{ $site->email }}?subject={{ $subject }}" class="mt-10 inline-flex min-h-13 items-center gap-3 bg-ink py-3 pr-4 pl-6 text-base font-semibold text-canvas transition-[translate,background-color] duration-150 hover:bg-ink/85 active:translate-y-px">
                {{ $ctaLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
            </a>
        </div>
        <dl class="border-t-2 border-ink lg:col-span-5">
            <div class="grid gap-1 border-b border-ink/25 py-5 sm:grid-cols-[8rem_1fr] sm:gap-6">
                <dt class="text-sm font-semibold">Phone</dt>
                <dd><a href="{{ $site->phone_href }}" class="font-display text-4xl leading-none font-extrabold tabular-nums underline-offset-4 hover:underline">{{ $site->phone }}</a></dd>
            </div>
            <div class="grid gap-1 border-b border-ink/25 py-5 sm:grid-cols-[8rem_1fr] sm:gap-6">
                <dt class="text-sm font-semibold">Email</dt>
                <dd><a href="mailto:{{ $site->email }}" class="break-all text-lg font-medium underline-offset-4 hover:underline">{{ $site->email }}</a></dd>
            </div>
            <div class="grid gap-1 border-b border-ink/25 py-5 sm:grid-cols-[8rem_1fr] sm:gap-6">
                <dt class="text-sm font-semibold">We work in</dt>
                <dd class="text-lg">{{ $site->service_area }}</dd>
            </div>
            <div class="grid gap-1 border-b border-ink/25 py-5 sm:grid-cols-[8rem_1fr] sm:gap-6">
                <dt class="text-sm font-semibold">Office</dt>
                <dd class="text-lg">{{ $site->hours_note }}</dd>
            </div>
        </dl>
    </div>
</section>
