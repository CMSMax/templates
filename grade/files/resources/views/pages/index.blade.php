<x-layouts.main>
    <x-sections.hero/>
    <x-sections.services :items="$services"/>
    <x-sections.work :items="$projects"/>
    <x-sections.process :items="$steps"/>
    <x-sections.proof :figures="$site->figures"/>
    <x-sections.quote/>
</x-layouts.main>
