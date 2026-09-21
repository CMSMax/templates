<x-layouts.main title="Tally Accounting — Your numbers, kept in order" description="A small accounting practice for owner-run businesses and families: tax returns, bookkeeping, payroll, advisory and IRS notices, all on a fixed monthly fee. Book a free twenty-minute call.">
    <x-sections.hero/>
    <x-sections.services :items="$services"/>
    <x-sections.calendar :items="$deadlines" :months="$site->months"/>
    <x-sections.steps :steps="$site->steps"/>
    <x-sections.proof/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.cta/>
</x-layouts.main>
