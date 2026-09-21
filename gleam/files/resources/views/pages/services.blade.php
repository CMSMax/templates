<x-layouts.main title="Cleaning services and prices — Gleam Home Cleaning" description="Regular cleans from $140, deep cleans from $260, move-out cleans from $340 and office cleaning. What each covers, how long it takes, and the extras.">
    <x-sections.page-header :items="$services"/>
    <x-sections.service-list :items="$services"/>
    <x-sections.clean-facts :items="$checklist" eyebrow="Side by side" heading="The same list, three kinds of clean." body="A regular clean keeps a home where you like it. A deep clean reaches the places a regular clean leaves alone. A move-out clean does both, inside every cupboard and appliance." note="Want something that is not on the list? Every extra below has a flat price you can add to any visit." image=""/>
    <x-sections.extras :items="$site->extras"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.book/>
</x-layouts.main>
