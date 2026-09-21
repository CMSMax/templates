<x-layouts.main title="Prices — Plumb Line Plumbing, Denver" description="Our full price book: flat prices for drains, water heaters, leaks and fixtures, with parts and labour included and no hourly clock.">
    <x-sections.page-header heading="The price book." body="The same book our plumbers quote from at your door. If your job isn't listed, we price it the same way, in writing, before we start."/>
    <x-sections.prices :items="$prices" show="all" heading="Every flat price" body="Parts, labour and clean-up included. Nights, weekends and holidays cost the same."/>
    <x-sections.process :items="$steps"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.call/>
</x-layouts.main>
