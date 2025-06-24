<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Edit vacancy:" />
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-forms.edit-vacancypost-form title="Edit your vacancy: {{ $vacancy->title }}" :vacancy="$vacancy" />
        </x-main>
    </x-slot>
</x-layout>
