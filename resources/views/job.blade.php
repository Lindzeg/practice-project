
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
                <a href="/jobs">< Go to previous page</a>
            </div>
            <div class="text-container">
                <h2>{{ $job['title']}}</h2>
                <h3>Job discription</h3>
                <br>
                <p>{{$job['job_discription']}}</p>
                <p>The estemete salary for this job is around €{{$job['salary'] }} per year. </p>
            </div>
        </x-main>
    </x-slot>
</x-layout>
