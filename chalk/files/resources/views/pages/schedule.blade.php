<x-layouts.main title="Class schedule — Chalk Strength Club" description="The whole week at Chalk: Strength, Engine, Barbell Club and Foundations classes, times, coaches, and what to know before your first class.">
    <x-sections.timetable headingLevel="h1" label="Schedule" heading="The week at Chalk." body="Thirty-five coached classes a week, capped at twelve. Book in the member app up to seven days ahead. New here? Start with Foundations — or any class, and tell the coach." showLink="0"/>
    <x-sections.programs label="Class notes" heading="What each class is for." body="Every program is written by our head coach on a twelve-week cycle. Mix and match — most members pair Strength with Engine."/>
    <x-sections.faq :items="$site->faqs"/>
    <x-sections.visit :items="$site->hours"/>
</x-layouts.main>
