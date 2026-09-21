<x-layouts.main title="Flash Tattoo Co. — Custom tattoos and walk-in flash in Springfield" description="Custom tattoos and walk-in flash at 214 Mercer Street, Springfield. Fine line, blackwork, traditional and Japanese. Book a free consult or walk in Fridays and Saturdays.">
    <x-sections.hero :styles="$site->styles"/>
    <x-sections.work :items="$site->work"/>
    <x-sections.flash-wall :items="$flash"/>
    <x-sections.artists :items="$artists"/>
    <x-sections.process :items="$site->steps"/>
    <x-sections.visit/>
</x-layouts.main>
