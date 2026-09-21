<x-layouts.main title="Programs — Margin Tutoring" description="Maths, English and reading, the sciences, entrance and test prep, and study skills — one-to-one or in groups of four, for ages 8 to 18.">
    <x-sections.page-header heading="Five programs, one way of teaching." intro="Each one starts with a free assessment and a written plan, runs with the same tutor every week, and reports home every four weeks." margin="pick the gap, not the grade"/>
    <x-sections.program-list :items="$program"/>
    <x-sections.term :items="$steps"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.close/>
</x-layouts.main>
