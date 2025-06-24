<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="create a vacancy"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-forms.create-vacancypost-form title="Create a new vacancy"/>
        </x-main>
    </x-slot>
</x-layout>
