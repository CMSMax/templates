<x-layouts.main title="Gleam Home Cleaning — Same cleaner, fixed price, Springfield" description="Regular, deep and move-out cleaning in Springfield by insured cleaners we employ ourselves. Published checklist, fixed prices from $140. Book a clean.">
    <x-sections.hero :promises="$site->promises"/>
    <x-sections.services :items="$services"/>
    <x-sections.clean-facts :items="$checklist"/>
    <x-sections.steps :steps="$site->steps"/>
    <x-sections.reviews :items="$site->reviews"/>
    <x-sections.book/>
</x-layouts.main>
