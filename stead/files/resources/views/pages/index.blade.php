<x-layouts.main title="Stead Property Management — Portland rentals, handled" description="Residential property management in Portland: leasing, rent collection, and maintenance for an 8% fee, with a plain statement and deposit on the 5th.">
    <x-sections.hero :stats="$site->stats" :statementLines="$site->statement_lines"/>
    <x-sections.services :items="$services"/>
    <x-sections.fees :items="$plans"/>
    <x-sections.onboarding :steps="$site->onboarding"/>
    <x-sections.residents/>
    <x-sections.contact/>
</x-layouts.main>
