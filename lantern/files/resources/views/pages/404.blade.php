<x-layouts.main title="Page not found — Lantern Home Services" description="That page is not here. Head back to the services, the recent work or the phone number.">
    <x-sections.page-header heading="That page is not here." intro="The link may be old, or the page may have moved. Everything Lantern does is one of these four."/>
    <x-sections.trades :items="$service"/>
    <x-sections.close heading="Still looking for something?" body="Call and tell us what the house is doing. It is usually faster than a website anyway."/>
</x-layouts.main>
