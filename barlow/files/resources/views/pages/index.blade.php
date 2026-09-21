<x-layouts.main title="Barlow Barber Co. — Classic cuts and hot towel shaves in Springfield" description="Skin fades, scissor cuts, beard work, and straight-razor hot towel shaves at 88 Dover Street, Springfield. Book a chair or walk in, Tuesday to Sunday.">
    <x-sections.hero/>
    <x-sections.craft/>
    <x-sections.price-board/>
    <x-sections.story :items="$site->facts"/>
    <x-sections.reviews :items="$site->reviews"/>
    <x-sections.visit/>
</x-layouts.main>
