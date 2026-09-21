<x-layouts.main title="Tulle — Wedding planning and design in the Hudson Valley" description="Full planning, partial planning, and wedding-month coordination from a small Hudson Valley studio. Now booking 2027 and 2028 dates.">
    <x-sections.hero :palette="$site->palette"/>
    <x-sections.services :items="$packages"/>
    <x-sections.weddings :items="$weddings"/>
    <x-sections.process :items="$site->steps"/>
    <x-sections.kind-words/>
    <x-sections.inquire/>
</x-layouts.main>
