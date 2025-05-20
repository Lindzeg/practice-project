
<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Job"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="job" :job="$job">
            <div class="img-container">
                <img src="{{ asset('storage/' . $job->img_path) }}" alt="{{ $job['title'] }}">
            </div>
            <div class="text-container">
                <h2>{{ $job['title']}}</h2>
                <br>
                <p>This job pays {{ $job['salary'] }} per year </p>
            </div>
        </x-main>
    </x-slot>
</x-layout>
