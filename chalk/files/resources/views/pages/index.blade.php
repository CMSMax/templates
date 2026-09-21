<x-layouts.main title="Chalk Strength Club — Coached strength gym in Portland" description="Coached strength and conditioning in classes of twelve or fewer. See the weekly schedule, memberships from $25, and start with a free week.">
    <x-sections.hero :items="$site->stats"/>
    <x-sections.programs/>
    <x-sections.timetable/>
    <x-sections.first-hour :items="$site->first_steps"/>
    <x-sections.memberships/>
    <x-sections.visit :items="$site->hours"/>
</x-layouts.main>
