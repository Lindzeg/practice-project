<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="login"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-forms.login-form title="Login"/>
        </x-main>
    </x-slot>
</x-layout>
