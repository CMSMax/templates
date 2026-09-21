<x-layouts.main title="Menu — Juniper" description="This week's menu at Juniper: starters, mains, sides, desserts, and drinks, cooked from what the farms bring in.">
    <x-sections.page-header heading="The menu" body="It changes with the farms, so this is this week's card. Plates arrive when they are ready and are made for sharing."/>
    <x-sections.menu-card :items="$menu" heading="This week" subheading="Dinner, Tuesday to Sunday" featuredOnly="0" linkLabel=""/>
    <x-sections.visit/>
</x-layouts.main>
