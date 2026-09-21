<x-layouts.main title="Services & Prices — Romp Dog Club" description="Grooming from $45, daycare at $38 a day, boarding from $62 a night, plus walks and training. Every price at Romp Dog Club, on one page.">
    <x-sections.page-header/>
    <x-sections.price-signs :groups="$site->service_groups"/>
    <x-sections.faq/>
    <x-sections.cta heading="Book a visit." body="The first half-day is free. Call or text and we'll set up a meet-and-greet."/>
</x-layouts.main>
