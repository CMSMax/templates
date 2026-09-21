<x-layouts.main title="Visit — Hem, 41 Linden Street, Millbrook" description="Hem is at 41 Linden Street, Millbrook, with free parking nearby and a step-free entrance. Opening hours, fittings, alterations and returns.">
    <x-sections.page-header eyebrow="Visit" heading="Four doors down from the library." intro="Open six days a week, with fittings, alterations and a seat for whoever came with you."/>
    <x-sections.the-shop/>
    <x-sections.services :items="$site->services"/>
    <x-sections.faq :items="$faqs"/>
</x-layouts.main>
