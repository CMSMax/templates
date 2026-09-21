<x-layouts.main title="Services — Plumb Line Plumbing, Denver" description="Leak repair, drain cleaning, water heaters, toilets and faucets, repiping and 24/7 emergency call-outs, each at a flat price quoted before we start.">
    <x-sections.page-header heading="What we fix." body="Six kinds of job, each with a flat price and a typical time. Pick one to see what the visit includes."/>
    <x-sections.service-grid :items="$services"/>
    <x-sections.finder :items="$faults" heading="Not sure which?" body="Tell us what you are seeing and we will show you the likely cause and the price."/>
    <x-sections.call/>
</x-layouts.main>
