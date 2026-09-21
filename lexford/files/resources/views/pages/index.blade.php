<x-layouts.main title="Lexford Law — Clear counsel for the moments that matter" description="A small law firm for businesses, families and individuals: business and contracts, employment, real estate, estate planning, family law and litigation. Schedule a free consultation.">
    <x-sections.hero :values="$site->values"/>
    <x-sections.wordmark/>
    <x-sections.practice-list :items="$practice_areas"/>
    <x-sections.approach :steps="$site->approach_steps"/>
    <x-sections.attorneys :items="$attorneys"/>
    <x-sections.consult/>
</x-layouts.main>
