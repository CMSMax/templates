<x-layouts.main title="Services & prices — Barlow Barber Co." description="Haircuts, skin fades, beard trims, and straight-razor hot towel shaves, with plain prices and times. Every service includes a hot towel finish.">
    <x-sections.page-header/>
    <x-sections.price-board heading="Every service" body="Times are how long you will be in the chair. Prices include a wash, a hot towel finish, and a style." full="1" linkLabel=""/>
    <x-sections.ritual/>
    <x-sections.faq :items="$site->faqs"/>
    <x-sections.cta/>
</x-layouts.main>
