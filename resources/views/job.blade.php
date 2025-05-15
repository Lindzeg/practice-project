@props(['jobs', 'job'])

<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Job"/>
        </x-slot>

    <x-slot name="main">
        <x-main :jobs="$jobs" :job="$job">
            <ul>
                @foreach ( $jobs as $job)
                    <li>
                        <a href="/jobs/{id}">
                            <strong>
                                {{ $job['title'] }} pays {{ $job['salary'] }} per year.
                            </strong>
                        </a>
                    </li>
                @endforeach
            </ul>
        </x-main>
    </x-slot>
</x-layout>
