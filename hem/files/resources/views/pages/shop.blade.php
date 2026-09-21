<x-layouts.main title="Shop — Hem, Millbrook" description="Every piece on the rail at Hem this week: knitwear, overshirts, silk dresses, canvas trousers and boiled wool coats from seven small makers, with prices.">
    <x-sections.page-header/>
    <x-sections.piece-grid :items="$piece"/>
    <x-sections.services :items="$site->services" eyebrow="With every piece" heading="Altered, held or wrapped."/>
    <x-sections.close/>
</x-layouts.main>
