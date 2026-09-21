<x-layouts.main title="Pricing and schedule — Margin Tutoring" description="Small groups from $58 a session, one-to-one at $96, and an eight-week exam intensive. The assessment is free and there is no contract.">
    <x-sections.page-header heading="Clear prices, no contract." intro="Pay per session, month by month. Stop whenever you like — we would rather earn the next term than lock you into it."/>
    <x-sections.plans :items="$plans"/>
    <x-sections.schedule :items="$schedule"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.close/>
</x-layouts.main>
