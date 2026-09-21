<x-layouts.main title="Services — Lantern Home Services" description="Heating and cooling, plumbing, electrical, handyman work, water heaters and drains — six trades, one licensed crew, one phone number.">
    <x-sections.page-header heading="Six trades, one crew." intro="Every one of these is handled by a licensed Lantern technician on the same schedule and the same number. Prices are flat and quoted before the work starts."/>
    <x-sections.service-list :items="$service"/>
    <x-sections.process/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.close/>
</x-layouts.main>
