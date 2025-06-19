<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="login"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            @if (session('status'))
            <strong class="bg-red-900 p-3 rounded-md self-center">
                <p class="text-red-200 animate-[pulse_2s_ease-in-out_infinite] duration-900 font-[arial] font-light">{{ session('status') }}</p>
            </strong>
            @endif
            <x-forms.login-form title="Login"/>
        </x-main>
    </x-slot>
</x-layout>
