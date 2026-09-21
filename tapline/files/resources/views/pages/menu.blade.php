<x-layouts.main title="Tap list — Tapline Brewing" description="Every beer, cider and zero-proof pour on the board today at Tapline Brewing, with styles, ABV, pour sizes and prices. Flights of any four for $12.">
    <x-sections.tap-list-header/>
    <x-sections.tap-list :groups="$site->tap_sections"/>
    <x-sections.visit heading="Thirsty yet?" body="Everything on this list is pouring right now. Come by — the first taste is on us if you can't decide."/>
</x-layouts.main>
