<x-layouts.main title="Contact — Margin Tutoring" description="Call, email or visit Margin Tutoring at 42 Linden Street, Harrow Hill to book a free forty-minute assessment.">
    <x-sections.page-header heading="Book the free assessment." intro="Forty minutes with a tutor, a written summary two days later, and no obligation either way."/>
    <x-sections.contact-panel :items="$site->assessment"/>
    <x-sections.report-card :items="$results" heading="What a term can look like."/>
    <x-sections.close heading="Prefer to talk it through?" body="Call during session hours and a tutor will pick up, or leave a message and we will ring you back the same evening." margin="we answer our own phone"/>
</x-layouts.main>
