<x-layouts.main title="About the firm — Lexford Law" description="A small firm by design: three attorneys, one office, and a commitment to clear advice and fixed fees wherever possible. Meet the attorneys.">
    <x-sections.page-header heading="A small firm, deliberately" body="We have chosen to stay small so that every client works directly with a partner — from the first call to the last signature." image="/images/law-library.jpg" imageAlt="A quiet law library with walnut shelves, brass reading lamps and a tall arched window."/>
    <x-sections.story/>
    <x-sections.values :items="$site->values"/>
    <x-sections.attorneys :items="$attorneys" heading="Meet the attorneys" body="Every client works directly with one of us. Here is who that will be." showBios="1"/>
    <x-sections.consult/>
</x-layouts.main>
