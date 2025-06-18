<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="create a job post"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-forms.create-jobpost-form title="Create a new job post"/>
        </x-main>
    </x-slot>
</x-layout>
