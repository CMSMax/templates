<x-layouts.main title="Schedule a consultation — Lexford Law" description="Call, email or visit Lexford Law to schedule a free, confidential first consultation. We return every call within one business day.">
    <x-sections.page-header heading="Schedule a consultation" body="Your first conversation with us is free, confidential, and carries no obligation. Choose whichever way suits you."/>
    <x-sections.contact-options/>
    <x-sections.approach :steps="$site->approach_steps" heading="What happens after you call" body="No forms to fill in and no waiting lists. Here is exactly what to expect." image="/images/consultation.jpg"/>
    <x-sections.faq :items="$faqs"/>
</x-layouts.main>
