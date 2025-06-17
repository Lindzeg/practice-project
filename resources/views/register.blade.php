<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="register"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-register-form title="Register"/>
        </x-main>
    </x-slot>
</x-layout>
