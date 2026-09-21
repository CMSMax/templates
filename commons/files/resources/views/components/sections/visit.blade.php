@props([
    'heading' => 'Come by the hall.',
    'body' => 'Shopping the pantry, dropping off a bag of groceries, or just curious — the door on Alder Street is open, and someone will show you around.',
    'directionsLabel' => 'Get directions',
    'closingLine' => 'Can’t make it over? Give from wherever you are.',
    'image' => '/images/hall.jpg',
    'imageAlt' => 'The brick hall on Alder Street with its doors propped open and a cart of grocery boxes by the entrance',
])
<section id="visit" aria-labelledby="visit-heading" class="scroll-mt-20">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-14 lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-6">
                <h2 id="visit-heading" class="font-display text-[clamp(2.5rem,6vw,5rem)] leading-[0.95] font-extrabold tracking-[-0.035em] text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
                <address class="mt-10 not-italic">
                    <p class="font-display text-3xl leading-tight font-bold text-ink">{{ $site->address }}<br>{{ $site->city }}</p>
                    <div class="mt-6 flex flex-col items-start gap-2 text-lg">
                        <a href="{{ $site->phone_href }}" class="rounded-sm font-bold text-ink tabular-nums hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
                        <a href="mailto:{{ $site->email }}" class="rounded-sm break-all text-ink hover:underline hover:decoration-primary hover:decoration-2 hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a>
                    </div>
                </address>
                <a href="{{ $site->directions_url }}" class="mt-8 inline-flex min-h-12 items-center gap-2 rounded-full px-6 font-bold text-ink ring-2 ring-ink ring-inset transition-colors duration-150 hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $directionsLabel }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"/></svg></a>
            </div>
            <div class="lg:col-span-5 lg:col-start-8">
                @if ($image)
                    <div class="mb-12">
                        <x-riso :image="$image" :alt="$imageAlt"/>
                    </div>
                @endif
                <h3 class="font-display text-2xl font-bold text-ink">Hours</h3>
                <dl class="mt-5 border-b-2 border-ink">
                    @foreach ($site->hours as $row)
                        <div class="flex flex-col gap-1 border-t-2 border-ink py-5 sm:flex-row sm:items-baseline sm:justify-between sm:gap-6">
                            <dt class="text-lg font-bold text-ink">{{ $row->label }}</dt>
                            <dd class="text-lg text-muted tabular-nums">{{ $row->value }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-5 text-base/7 text-muted">{{ $site->hours_note }}</p>
            </div>
        </div>
        <div class="mt-20 flex flex-col gap-6 border-t border-line pt-10 sm:flex-row sm:items-center sm:justify-between lg:mt-28">
            <p class="max-w-[28ch] font-display text-[clamp(1.75rem,3vw,2.5rem)] leading-[1.05] font-bold tracking-[-0.02em] text-ink">{{ $closingLine }}</p>
            <a href="{{ $site->donate_url }}" class="inline-flex min-h-14 shrink-0 items-center gap-2.5 self-start rounded-full bg-primary px-7 text-lg font-bold text-primary-foreground transition-[background-color,transform] duration-150 hover:-translate-y-0.5 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:self-auto">{{ $site->cta_label }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.25" d="M7 7h10v10M7 17L17 7"/></svg></a>
        </div>
    </div>
</section>
