<x-layouts.main title="Menu — Proof Bakery, Hudson" description="Sourdough and rye, laminated pastry, cakes and tarts by the slice or whole, and coffee from down the street. Prices, and what's on this season.">
    <x-sections.menu-header/>
    <x-sections.menu-list :items="$menu"/>
    <x-sections.visit :items="$hours"/>
</x-layouts.main>
