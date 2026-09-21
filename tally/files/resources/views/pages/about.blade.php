<x-layouts.main title="About — Tally Accounting" description="Tally is a nine-person accounting practice on Maple Street, Springfield, looking after four hundred small businesses and families since 2011.">
    <x-sections.page-header heading="Nine people, four hundred clients, one street." body="We’re a small practice on purpose. It means the person who prepares your return is the person who answers when you call."/>
    <x-sections.story :figures="$site->figures"/>
    <x-sections.team :items="$team"/>
    <x-sections.credentials :items="$site->credentials"/>
    <x-sections.cta/>
</x-layouts.main>
