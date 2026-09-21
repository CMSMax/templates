<x-layouts.main title="Lantern Home Services — heating, plumbing, electrical and repairs" description="One licensed crew for heating, cooling, plumbing, electrical and household repairs in Wrenfield. Flat prices, same-day slots, and a person who answers the phone.">
    <x-sections.hero/>
    <x-sections.trades :items="$service"/>
    <x-sections.house-plan :items="$service"/>
    <x-sections.recent-jobs :items="$jobs"/>
    <x-sections.why/>
    <x-sections.process/>
    <x-sections.reviews :items="$reviews"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.close/>
</x-layouts.main>
