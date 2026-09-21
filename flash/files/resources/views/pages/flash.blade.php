<x-layouts.main title="Walk-in flash — Flash Tattoo Co." description="This week's flash sheet at Flash Tattoo Co.: every design drawn in-house, tattooed once, with the price on the tag. Walk in Fridays and Saturdays from noon.">
    <x-sections.page-header highlight="Walk-ins Fri & Sat from noon" body="Point at a tag, give the front desk your name, and sit in the order you arrived. Every design is drawn in-house, tattooed once, and priced on the tag."/>
    <x-sections.flash-wall :items="$flash" heading="" limit="60" columns="3" linkLabel=""/>
    <x-sections.faq :items="$site->faqs"/>
    <x-sections.visit heading="Want it custom?" body="If nothing on the wall is quite it, tell us the idea. We reply within two days with an artist and a consult time."/>
</x-layouts.main>
