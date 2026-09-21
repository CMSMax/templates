<x-layouts.main title="Page not found — Torque Auto Repair" description="This page took a wrong turn.">
    <section class="py-20 lg:py-28">
        <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-14 px-5 sm:px-8 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <h1 class="max-w-[12ch] font-display text-[clamp(3rem,7vw,5.75rem)] leading-[0.92] font-bold text-balance text-ink uppercase">Wrong turn.</h1>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">That page isn't here — it may have moved, or the link had a typo. The shop's still open, though.</p>
                <div class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="/" class="inline-flex items-center rounded-md bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Back to the homepage</a>
                    <a href="/services" class="rounded-sm py-3 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">See services &amp; prices</a>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="mx-auto max-w-[32rem] lg:rotate-2">
                    <x-plate characters="404" top="Not found" slogan="Let's get you home" :frameTop="$site->plate_frame" :frameBottom="$site->phone" label="A license plate reading 404, Not found"/>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
