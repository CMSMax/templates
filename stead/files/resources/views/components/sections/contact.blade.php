@props([
    'eyebrow' => 'For owners',
    'heading' => 'Find out what your home should rent for.',
    'body' => 'Send us the address. Within two business days you get a written rent estimate from real comparables, and a straight answer on whether we are the right fit.',
    'emailLabel' => 'Email the address',
])
<section id="contact" class="pb-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid overflow-hidden rounded-[min(3vw,2rem)] bg-surface ring-1 ring-ink/8 lg:grid-cols-[7fr_5fr]">
            <div class="p-8 sm:p-12 lg:p-16">
                <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[18ch] font-display text-4xl font-medium tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-5 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <div class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->email_href }}" class="rounded-full bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $emailLabel }}</a>
                    <a href="{{ $site->phone_href }}" class="rounded-md font-medium text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">or call {{ $site->phone }}</a>
                </div>
            </div>
            <div class="border-t border-ink/8 bg-canvas/60 p-8 sm:p-12 lg:border-t-0 lg:border-l lg:p-16">
                <h3 class="font-display text-xl font-medium tracking-tight">Office hours</h3>
                <dl class="mt-5 flex flex-col gap-3">
                    @foreach ($site->hours as $row)
                        <div class="flex items-baseline gap-3">
                            <dt class="font-medium whitespace-nowrap">{{ $row->day }}</dt>
                            <span class="leader" aria-hidden="true"></span>
                            <dd class="text-muted whitespace-nowrap tabular-nums">{{ $row->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-4 text-sm text-muted">{{ $site->hours_note }}</p>
                <h3 class="mt-10 font-display text-xl font-medium tracking-tight">Office</h3>
                <p class="mt-3 text-muted">{{ $site->address }}<br>{{ $site->city }}</p>
                <p class="mt-3"><a href="{{ $site->map_url }}" class="font-medium text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Get directions</a></p>
            </div>
        </div>
    </div>
</section>
