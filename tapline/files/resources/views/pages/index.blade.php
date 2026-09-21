<x-layouts.main title="Tapline Brewing — Craft brewery & taproom in Milwaukee" description="Twelve taps brewed twenty feet from the bar. See what's pouring today, trivia and vinyl nights this week, and our hours and directions.">
    <x-sections.hero/>
    <x-sections.tap-board/>
    <x-sections.story :items="$site->brewery_facts"/>
    <x-sections.week/>
    <x-sections.visit/>
</x-layouts.main>
