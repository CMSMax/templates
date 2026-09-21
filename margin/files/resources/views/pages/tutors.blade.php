<x-layouts.main title="Our tutors — Margin Tutoring" description="Six qualified teachers covering maths, English, the sciences, test prep and study skills. Your child sees the same tutor every week.">
    <x-sections.page-header heading="Six teachers, one standard." intro="Every Margin tutor has taught in a classroom or holds a graduate degree in their subject, and every one has a current background check." margin="same tutor every week"/>
    <x-sections.tutor-grid :items="$tutors"/>
    <x-sections.testimonials :items="$testimonials"/>
    <x-sections.close/>
</x-layouts.main>
