<x-layout>

    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="job post"/>
        </x-slot>

    <x-slot name="main">


        <x-main class="job" :job="$job">
            <div class="img-container">
                <img src="{{ asset('storage/' . $job->img_path) }}" alt="{{ $job->title }}">
                <a href="/jobs">< Go to previous page</a>
            </div>
            <div class="text-container">
                <h2>{{ $job->title}}</h2>
                <h3>Job discription</h3>
                <h4>Author: {{ $job->user->first_name }}</h4>
                <p>{{$job->description}}</p>
                <p>The estimate salary for this job is around € {{$job->salary }} per year. </p>
                <div>
                    @auth
                        @if(auth()->user()->id === $job->user_id)
                            <a href="{{ route('jobs.edit', $job->id) }}">Edit job</a>
                            <button form="delete">Delete job</button>
                        @endif
                    @endauth
                </div>
            </div>
            <form method="POST" action="/jobs/{{ $job->id }}" id="delete" class='hidden'>
                @csrf
                @method('DELETE')
            </form>
        </x-main>
    </x-slot>
</x-layout>
