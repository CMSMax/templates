<x-layouts.main title="About — Keystone Home Services" description="A local, licensed home-services crew built on straight answers, careful hiring, and work we're proud to sign.">
    <section class="py-16 lg:py-24">
        <div class="mx-auto grid max-w-6xl gap-12 px-6 lg:grid-cols-2 lg:gap-16">
            <div>
                <h1 class="max-w-[20ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">The crew behind the vans</h1>
                <p class="mt-6 max-w-[58ch] text-base/7 text-pretty text-ink">{{ $site->short_name }} started with one van, one toolbox, and a simple frustration: getting honest help for a house shouldn't be this hard. No callbacks that never come, no mystery invoices, no strangers you feel uneasy letting through the door.</p>
                <p class="mt-4 max-w-[58ch] text-base/7 text-pretty text-muted">So we built the company we wished we could hire. Every technician is licensed, background-checked, and paid to do the job right rather than fast. Every estimate is written down before work starts. And every job ends with the same question: would we be happy with this in our own home?</p>
            </div>
            <div class="self-center rounded-[1.25rem] bg-ink/3 p-1.5 ring-1 ring-ink/5"><img src="/images/hero-overlook.jpg" alt="A well-kept suburban home at golden hour" width="1728" height="964" loading="lazy" class="w-full rounded-[calc(1.25rem-6px)] object-cover"></div>
        </div>
    </section>
    <section class="border-t border-line py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="max-w-[35ch] font-display text-3xl font-semibold tracking-tight text-balance text-ink sm:text-4xl">What we hold ourselves to</h2>
            <dl class="mt-12 grid gap-x-8 sm:grid-cols-3">
                <div class="border-t border-line py-6">
                    <dt class="flex items-center gap-2.5 font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                        Licensed &amp; insured
                    </dt>
                    <dd class="mt-2 max-w-[44ch] text-base/7 text-pretty text-muted sm:text-sm/6">Fully licensed, bonded, and insured for every trade we practice. Paperwork available on request, without a sigh.</dd>
                </div>
                <div class="border-t border-line py-6">
                    <dt class="flex items-center gap-2.5 font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                        Careful hiring
                    </dt>
                    <dd class="mt-2 max-w-[44ch] text-base/7 text-pretty text-muted sm:text-sm/6">Background checks, reference checks, and a working interview before anyone wears the shirt. Most of our crew came by referral.</dd>
                </div>
                <div class="border-t border-line py-6">
                    <dt class="flex items-center gap-2.5 font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"/></svg>
                        Work we sign
                    </dt>
                    <dd class="mt-2 max-w-[44ch] text-base/7 text-pretty text-muted sm:text-sm/6">If something isn't right, we come back and make it right. That guarantee is in writing on every invoice.</dd>
                </div>
            </dl>
            <p class="mt-10 flex items-center gap-2.5 text-base/7 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                Proudly serving {{ $site->service_area }}.
            </p>
        </div>
    </section>
    <x-sections.review-spotlight/>
    <x-sections.cta/>
</x-layouts.main>
