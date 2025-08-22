<x-layouts.app>
        <livewire:projects.show :project="request()->route('project')"/>
        <livewire:projects.proposals :project="request()->route('project')"/>
</x-layouts.app>
