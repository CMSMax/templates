<x-layouts.main :title="$projects->title" :description="$projects->description" :image="$projects->image">
    <x-sections.project-detail :project="$projects" :others="$entries"/>
</x-layouts.main>
