<x-layouts.main title="Contact — Keystone Home Services" description="Call, email, or stop by — free estimates, same-day service when you need it, and emergency calls answered around the clock.">
    <section class="py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <h1 class="max-w-[24ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">Tell us what needs fixing</h1>
            <p class="mt-5 max-w-[52ch] text-lg text-pretty text-muted">The fastest way to a free estimate is a phone call — a real person answers, even after hours.</p>
            <div class="mt-12 grid gap-12 lg:grid-cols-2 lg:gap-16">
                <div>
                    <ul role="list" class="flex flex-col">
                        <li class="flex items-start gap-4 border-t border-line py-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"/></svg>
                            <div>
                                <p class="font-semibold text-ink">Call or text</p>
                                <p class="mt-1 text-base/7 text-muted"><a href="{{ $site->phone_href }}" class="font-medium text-ink tabular-nums hover:text-ink/70 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->phone }}</a> — {{ $site->hours_note }}.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 border-t border-line py-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M8 2v3m8-3v3"/><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M9 15l2 2l4-4"/></svg>
                            <div>
                                <p class="font-semibold text-ink">Email</p>
                                <p class="mt-1 text-base/7 text-muted">Send photos and a description to <a href="mailto:{{ $site->email }}" class="font-medium text-ink hover:text-ink/70 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->email }}</a> and we'll reply with an estimate.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 border-t border-line py-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <p class="font-semibold text-ink">Visit</p>
                                <p class="mt-1 text-base/7 text-muted">{{ $site->address }}. Serving {{ $site->service_area }}.</p>
                            </div>
                        </li>
                    </ul>
                    <h2 class="mt-10 font-semibold text-ink">Hours</h2>
                    <dl class="mt-3 max-w-sm">
                        @foreach ($hours as $slot)
                            <div class="flex justify-between gap-4 border-t border-line py-2.5 text-base/7 sm:text-sm/6">
                                <dt class="text-ink">{{ $slot->day }}</dt>
                                <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
                <div>
                    <h2 class="font-display text-2xl font-semibold tracking-tight text-ink">Common questions</h2>
                    <div class="mt-6 flex flex-col">
                        <details class="group border-t border-line">
                            <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-medium text-ink hover:text-ink/70">
                                Are estimates really free?
                                <span class="text-muted transition-transform duration-150 group-open:rotate-90" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg></span>
                            </summary>
                            <p class="max-w-[58ch] pb-5 text-base/7 text-pretty text-muted">Yes. We'll look at the job, talk through options, and put a price in writing — no charge and no obligation.</p>
                        </details>
                        <details class="group border-t border-line">
                            <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-medium text-ink hover:text-ink/70">
                                Are you licensed and insured?
                                <span class="text-muted transition-transform duration-150 group-open:rotate-90" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg></span>
                            </summary>
                            <p class="max-w-[58ch] pb-5 text-base/7 text-pretty text-muted">Fully — licensed, bonded, and insured for every trade we practice, and happy to show the paperwork before work starts.</p>
                        </details>
                        <details class="group border-t border-line">
                            <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-medium text-ink hover:text-ink/70">
                                Which areas do you serve?
                                <span class="text-muted transition-transform duration-150 group-open:rotate-90" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg></span>
                            </summary>
                            <p class="max-w-[58ch] pb-5 text-base/7 text-pretty text-muted">{{ $site->service_area }} — if you're on the edge of the map, call anyway and we'll tell you straight.</p>
                        </details>
                        <details class="group border-t border-line border-b">
                            <summary class="flex cursor-pointer items-center justify-between gap-4 py-4 font-medium text-ink hover:text-ink/70">
                                Do you handle emergencies?
                                <span class="text-muted transition-transform duration-150 group-open:rotate-90" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg></span>
                            </summary>
                            <p class="max-w-[58ch] pb-5 text-base/7 text-pretty text-muted">Burst pipe, dead furnace, sparking panel — call the number above any hour and a person will pick up.</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-sections.cta/>
</x-layouts.main>
