<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="contact"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-contact-form title="Contact us"/>
        </x-main>
    </x-slot>
</x-layout>
