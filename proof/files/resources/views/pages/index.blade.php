<x-layouts.main title="Proof Bakery — Sourdough and pastry on Mill Street, Hudson" description="Naturally leavened bread, butter croissants and seasonal galettes, baked through the night. See what comes out of the oven when, and call to order ahead.">
    <x-sections.hero/>
    <x-sections.oven-board :items="$bakes"/>
    <x-sections.spotlight/>
    <x-sections.counter :items="$menu"/>
    <x-sections.visit :items="$hours"/>
</x-layouts.main>
