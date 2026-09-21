<x-layouts.main title="Treatments & prices — Mint Family Dental" description="Check-ups, children's dentistry, fillings, crowns, implants, whitening, clear aligners, veneers and same-day emergency care — every price published.">
    <x-sections.page-header/>
    <x-sections.treatment-list :items="$treatments"/>
    <x-sections.smile-compare heading="One case, start to finish."/>
    <x-sections.book-band :hours="$hours"/>
</x-layouts.main>
