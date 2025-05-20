<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Job Listings"/>
        </x-slot>

    <x-slot name="main">
        <x-main :jobs="$jobs">

            <section>
                <div class="text-container">
                    <h2>Don't know which job would suit you best? See this overview page with details below</h2>
                    <p></p>
                </div>
            </section>

            <section>
                <div class="img-slider">
                    @if (isset($jobs))
                        @foreach ( $jobs as $job )
                        <div class="slide">
                            <div class="img-container">
                                <img src="{{ asset('storage/' . $job->img_path) }}" alt={{ $job['title'] }}>
                            </div>
                                <li>
                                    <a href="/jobs/{{ $job['id']}}"><strong>{{ $job['title'] }}</strong></a>
                                    <br>
                                    pays {{$job['salary']}} per year
                                </li>
                            </div>

                        @endforeach
                    @endif
                </div>
            </section>

            <section>
                <div class="job-wrapper">
                    <ul>
                        <li>
                            <h3></h3>
                            <p></p>
                            <datetime> </datetime>
                        </li>
                    </ul>
                </div>
            </section>

        </x-main>
    </x-slot>
</x-layout>
