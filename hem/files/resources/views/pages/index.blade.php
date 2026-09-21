<x-layouts.main title="Hem — clothes and small goods in Millbrook" description="An independent clothing shop on Linden Street, Millbrook: knitwear, shirts, dresses and coats from seven small makers, with free alterations on anything bought in the shop.">
    <x-sections.hero/>
    <x-sections.new-in :items="$piece"/>
    <x-sections.colour-card :items="$swatches"/>
    <x-sections.makers :items="$makers"/>
    <x-sections.marquee :items="$site->carry"/>
    <x-sections.the-shop/>
    <x-sections.services :items="$site->services"/>
    <x-sections.close/>
</x-layouts.main>
