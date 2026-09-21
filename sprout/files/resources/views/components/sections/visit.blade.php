@props([
    'eyebrow' => 'Questions',
    'heading' => 'Good questions, answered',
    'tourHeading' => 'Come see Sprout for yourself',
    'tourBody' => 'Tours take about 30 minutes, run weekday mornings, and little ones are welcome to come along. Call or email and we will find a time that works.',
    'tourButton' => 'Call to book a tour',
])
<section id="tour" class="scroll-mt-24 pb-20 lg:pb-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
        <div id="faq" class="scroll-mt-24">
            <p class="text-sm font-semibold text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <div class="mt-10 divide-y divide-line border-y border-line">
                @foreach ($faqs as $faq)
                    <details class="group">
                        <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-lg py-5 font-display text-lg font-medium text-ink transition-colors duration-150 hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-xl [&::-webkit-details-marker]:hidden">
                            {{ $faq->question }}
                            <span class="grid size-9 shrink-0 place-items-center rounded-full bg-surface transition-transform duration-200 group-open:rotate-45" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M5 12h14m-7-7v14"/></svg>
                            </span>
                        </summary>
                        <p class="pr-12 pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
        <div class="lg:sticky lg:top-8 lg:self-start">
            <div class="rounded-[2rem] bg-surface p-2">
                <div class="rounded-[1.5rem] bg-card p-7 sm:p-9">
                    <h2 class="font-display text-3xl font-semibold tracking-tight text-balance text-ink">{{ $tourHeading }}</h2>
                    <p class="mt-4 text-base/7 text-muted">{{ $tourBody }}</p>
                    <div class="mt-8 flex flex-col gap-3">
                        <a href="{{ $site->phone_href }}" class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"/></svg>
                            {{ $tourButton }}
                        </a>
                        <a href="mailto:{{ $site->email }}" class="inline-flex items-center justify-center gap-2 rounded-full px-6 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect width="20" height="16" x="2" y="4" rx="2"/></svg>
                            {{ $site->email }}
                        </a>
                    </div>
                    <dl class="mt-8 flex flex-col gap-4 border-t border-line pt-7 text-base/7">
                        <div class="flex gap-3">
                            <dt class="shrink-0 pt-1 text-muted"><span class="sr-only">Address</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg></dt>
                            <dd class="text-ink">{{ $site->address }}, {{ $site->city }} · <a href="{{ $site->directions_url }}" class="rounded-sm underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Directions</a></dd>
                        </div>
                        <div class="flex gap-3">
                            <dt class="shrink-0 pt-1 text-muted"><span class="sr-only">Hours</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></dt>
                            <dd>
                                <span class="block text-ink">{{ $site->hours_short }}</span>
                                <span class="block text-sm/6 text-muted">{{ $site->hours_note }}</span>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
