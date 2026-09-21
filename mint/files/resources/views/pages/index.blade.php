<x-layouts.main title="Mint Family Dental — Gentle, modern dentistry in Springfield">
    <x-sections.hero/>
    <x-sections.facts :items="$facts"/>
    <x-sections.treatment-menu :items="$treatments"/>
    <x-sections.smile-compare/>
    <x-sections.first-visit :items="$steps"/>
    <x-sections.dentist-note/>
    <x-sections.reviews :items="$reviews"/>
    <x-sections.book-band :hours="$hours"/>
</x-layouts.main>
