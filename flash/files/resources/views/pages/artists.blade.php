<x-layouts.main title="Artists — Flash Tattoo Co." description="Meet the three artists at Flash Tattoo Co. in Springfield: fine line and botanical, American traditional and blackwork, linework and cover-ups.">
    <x-sections.page-header heading="The artists." body="Three residents, three different hands. Look for the style you keep saving; books open month by month, and a closed book has a waitlist." highlight=""/>
    <x-sections.artists :items="$artists" heading="" full="1" linkLabel=""/>
    <x-sections.process :items="$site->steps"/>
    <x-sections.visit/>
</x-layouts.main>
