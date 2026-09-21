<x-layouts.main title="About us — Mint Family Dental" description="A family dental practice on Linden Avenue since 2011. Meet the dentists and hygienists you'll see at every visit.">
    <x-sections.page-header eyebrow="About us" heading="Same faces, same chair, every visit." intro="A small, independent practice where the dentist who plans your treatment is the one who does it."/>
    <x-sections.story/>
    <x-sections.team-grid :items="$team"/>
    <x-sections.reviews :items="$reviews"/>
    <x-sections.book-band :hours="$hours"/>
</x-layouts.main>
