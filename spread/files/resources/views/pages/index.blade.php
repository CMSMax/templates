<x-layouts.main title="Spread Catering — Seasonal catering in the Hudson Valley" description="Wedding, office and event catering cooked from the season. Menus from $24 per guest, with staff, rentals and a bar included. Request a quote.">
    <x-sections.hero :items="$site->events"/>
    <x-sections.menus/>
    <x-sections.included :items="$site->included"/>
    <x-sections.booking :items="$site->steps"/>
    <x-sections.quote/>
    <x-sections.cta/>
</x-layouts.main>
