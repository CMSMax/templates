<x-layouts.main title="About — Barlow Barber Co." description="A neighborhood barbershop since 2012. Meet the barbers, see the shop, and find out why the regulars keep coming back.">
    <x-sections.page-header heading="A barbershop, the way they used to be." body="Leather chairs, sharp razors, and barbers who know your name. We have been cutting hair on Dover Street since 2012, and we are not in a hurry." image="/images/interior.jpg" imageAlt="The barbershop at dusk, with leather chairs, brass mirrors, and warm pendant lights"/>
    <x-sections.story :items="$site->facts" heading="Two chairs and a promise." body="Walt Barlow opened the shop with a borrowed chair, his grandfather's razor, and one rule: nobody leaves until the cut is right. Twelve years on there are three chairs, a record player, and a lot of regulars, and the rule still stands." image="/images/beard-trim.jpg" imageAlt="A barber trimming a client’s beard with scissors and a comb" detail="/images/hot-towel.jpg" detailAlt="A client reclined under a steaming hot towel" linkLabel=""/>
    <x-sections.team :items="$barbers"/>
    <x-sections.gallery :items="$site->gallery"/>
    <x-sections.cta/>
</x-layouts.main>
