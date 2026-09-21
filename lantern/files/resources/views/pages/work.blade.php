<x-layouts.main title="Recent work — Lantern Home Services" description="Heat pumps, re-pipes, panel upgrades and half-day repair lists finished on the streets around Wrenfield.">
    <x-sections.page-header heading="Recent work." intro="Jobs from the last few weeks, with the street, the trade and how long each one actually took."/>
    <x-sections.job-grid :items="$jobs"/>
    <x-sections.reviews :items="$reviews"/>
    <x-sections.close/>
</x-layouts.main>
