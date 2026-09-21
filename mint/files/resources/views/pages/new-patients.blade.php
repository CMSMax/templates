<x-layouts.main title="New patients — Mint Family Dental" description="What happens at your first visit, what to bring, how insurance and payment work, and answers to the questions new patients ask most.">
    <x-sections.page-header eyebrow="New patients" heading="Your first visit, explained." intro="Most new patients are seen within a week. Here is exactly what happens, what to bring and how paying works."/>
    <x-sections.first-visit :items="$steps" eyebrow="How it works" heading="From booking to a written plan."/>
    <x-sections.checklist/>
    <x-sections.payment/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.book-band :hours="$hours"/>
</x-layouts.main>
