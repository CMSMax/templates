@props([
    'heading' => 'Your first Sunday',
    'headingEmphasis' => 'starts at the red doors.',
    'body' => 'Nobody will single you out, and nobody will ask for anything. Here is what the morning looks like.',
    'showActions' => '1',
])
<section aria-labelledby="first-visit-heading" class="bg-secondary py-24 text-secondary-foreground sm:py-28 lg:py-32">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-8 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <h2 id="first-visit-heading" class="font-display text-[clamp(2.5rem,5vw,4rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance">
                <span class="block">{{ $heading }}</span>
                <span class="block italic">{{ $headingEmphasis }}</span>
            </h2>
            <p class="max-w-[44ch] text-lg/8 text-pretty text-secondary-foreground/75">{{ $body }}</p>
        </div>
        <ol role="list" class="mt-16 grid gap-10 border-t border-secondary-foreground/15 pt-10 md:grid-cols-3 md:gap-12">
            @foreach ($site->first_visit as $step)
                <li>
                    <h3 class="font-display text-[1.75rem] leading-tight font-normal italic">{{ $step->title }}</h3>
                    <p class="mt-3 max-w-[40ch] text-base/7 text-pretty text-secondary-foreground/75">{{ $step->body }}</p>
                </li>
            @endforeach
        </ol>
        @if ($showActions == '1')
            <div class="mt-16 flex flex-col gap-8 rounded-sm bg-secondary-foreground/6 p-6 ring-1 ring-secondary-foreground/10 sm:p-8 lg:flex-row lg:items-center lg:justify-between">
                <dl class="grid gap-6 sm:grid-cols-2 sm:gap-12">
                    <div>
                        <dt class="smallcaps text-base text-secondary-foreground/65">Find us</dt>
                        <dd class="mt-1 text-lg/7">{{ $site->address }}, {{ $site->city }}</dd>
                    </div>
                    <div>
                        <dt class="smallcaps text-base text-secondary-foreground/65">Worship</dt>
                        <dd class="oldstyle mt-1 text-lg/7">{{ $site->times_short }}</dd>
                    </div>
                </dl>
                <div class="flex flex-wrap items-center gap-x-7 gap-y-4">
                    <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ $site->directions_url }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">
                        <span class="underline decoration-secondary-foreground/30 underline-offset-[6px] group-hover:decoration-secondary-foreground">Get directions</span>
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>
