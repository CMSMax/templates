<x-layouts.main title="Posy — Seasonal flowers and same-day delivery" description="A small flower studio arranging seasonal, locally grown flowers by hand. Order by 1 pm for same-day delivery across Springfield.">
    <x-sections.hero/>
    <x-sections.arrangements :items="$arrangements"/>
    <x-sections.in-season :items="$seasonal"/>
    <x-sections.occasions :items="$site->occasions"/>
    <x-sections.order/>
</x-layouts.main>
