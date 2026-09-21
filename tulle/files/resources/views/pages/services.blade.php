<x-layouts.main title="Services and pricing — Tulle wedding planning" description="Full planning from $14,500, partial planning from $7,800, and wedding-month coordination from $3,600 — what each includes and when to book.">
    <x-sections.page-header/>
    <x-sections.packages :items="$packages"/>
    <x-sections.day-sheet :items="$site->day_timeline"/>
    <x-sections.faqs :items="$site->faqs"/>
    <x-sections.inquire heading="Found the right package? Send us your date" body="Tell us when, where, and roughly how many, and we will reply with availability and a quote for your wedding."/>
</x-layouts.main>
