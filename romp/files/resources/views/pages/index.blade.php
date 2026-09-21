<x-layouts.main title="Romp Dog Club — Grooming, Daycare & Boarding in Riverside" description="Dog grooming, daycare and overnight boarding on a half-acre yard in Riverside. Clean dogs, tired dogs, happy dogs — and a report card at every pick-up.">
    <x-sections.hero/>
    <x-sections.directory :items="$site->service_groups"/>
    <x-sections.day :items="$site->day"/>
    <x-sections.first-visit :items="$site->rules"/>
    <x-sections.visit/>
    <x-sections.cta/>
</x-layouts.main>
