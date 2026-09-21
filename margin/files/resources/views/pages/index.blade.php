<x-layouts.main title="Margin Tutoring — maths, English, science and test prep for ages 8 to 18" description="Small-group and one-to-one tutoring in Harrow Hill and online, taught by qualified teachers, with a written report every four weeks. Book a free assessment.">
    <x-sections.hero :problems="$site->worksheet"/>
    <x-sections.subjects :items="$program"/>
    <x-sections.report-card :items="$results"/>
    <x-sections.term :items="$steps"/>
    <x-sections.tutors :items="$tutors"/>
    <x-sections.testimonials :items="$testimonials"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.close/>
</x-layouts.main>
