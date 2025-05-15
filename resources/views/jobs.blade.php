<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="About"/>
        </x-slot>

    <x-slot name="main">
        <x-main :jobs="$jobs"  />
    </x-slot>
</x-layout>
