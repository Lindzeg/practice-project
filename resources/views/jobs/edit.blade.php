<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Edit job:" />
        </x-slot>

    <x-slot name="main">
        <x-main class="form">
            <x-edit-job-post title="Edit your job post: {{ $job->title }}" :job="$job"/>
        </x-main>
    </x-slot>
</x-layout>
