<x-layouts.main title="Roofing — Ridge Roofing Co., Fort Worth" description="Roof replacement, leak repair, metal roofing, gutters, and ventilation in Fort Worth, quoted from photos of your actual roof.">
    <x-sections.page-header/>
    <x-sections.services heading="Five things we do every week." body="Each one starts the same way: a free roof check and photos of what we found." linkLabel="Book a free roof check" linkHref="/contact" :items="$services"/>
    <x-sections.layers :items="$layers"/>
    <x-sections.materials :items="$materials"/>
    <x-sections.faq :items="$faqs"/>
</x-layouts.main>
