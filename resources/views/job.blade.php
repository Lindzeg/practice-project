
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
                <img src="https://images.pexels.com/photos/5971249/pexels-photo-5971249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Director">
            </div>
            <div class="text-container">
                <h2>{{ $job['title']}}</h2>
                <br>
                <p>This job pays {{ $job['salary'] }} per year </p>
            </div>
        </x-main>
    </x-slot>
</x-layout>
