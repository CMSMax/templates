<x-layouts.main title="About — Hem, Millbrook" description="Hem is an independent clothing shop on Linden Street, Millbrook, opened in 2014 by a tailor. How we buy, who makes what we sell, and why we mend it for free.">
    <x-sections.page-header eyebrow="About Hem" heading="A tailor’s shop that sells clothes." intro="Twelve years on Linden Street, seven makers, and a sewing machine at the back that never stops."/>
    <x-sections.story/>
    <x-sections.principles :items="$site->principles"/>
    <x-sections.makers :items="$makers"/>
    <x-sections.close/>
</x-layouts.main>
