<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="Job Listings"/>
        </x-slot>

    <x-slot name="main">
        <x-main
            :jobs="$jobs"
            :vacancies="$vacancies"
            :firstVacancies="$firstVacancies"
            :otherVacancies="$otherVacancies"

        >
            <section>
                <div class="text-container">
                    <h2>Choosing a New Job: A Practical Decision with Long-Term Impact.</h2>
                    <p>Selecting a new job is a significant decision that involves carefulconsideration of both short-term needs and long-term goals.
                        Practical factors such as salary, job stability, benefits, and location play a central role, but it's equally important to assess the company’s culture,
                        opportunities for advancement, and alignment with your skill set.
                        Researching the organization, asking the right questions during interviews, and seeking feedback from current or former employees can provide valuable insights.
                        A well-chosen job not only supports financial security but also contributes to professional development and job satisfaction over time.</p>
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

            <section id="vacancy">
                <div class="vacancy-wrapper">
                    <h2>Job openings</h2>
                    {{--Initialize Alpine.js with 'open' set to false--}}
                        <ul x-data="{ open: false }">
                            {{--loop over first 3 vacancies--}}
                            @if(isset($vacancies))
                                @foreach ($firstVacancies as $vacancy)
                                    <li>
                                        <h3>{{$vacancy['title']}}</h3>
                                        <p>{{$vacancy['job_info']}}</p>
                                        <datetime>Posted at: {{$vacancy['created_at']}} <br> by: {{$vacancy->employer['company_name']}} </datetime>
                                    </li>
                                @endforeach
                                {{-- When the button is pressed, open is set to true, and loops over all other available vacancies --}}
                                @foreach ($otherVacancies as $vacancy)
                                  <template x-if="open">
                                    <li>
                                        <h3>{{$vacancy['title']}}</h3>
                                        <p>{{$vacancy['job_info']}}</p>
                                        <datetime>Posted at: {{$vacancy['created_at']}} <br> by: {{$vacancy->employer['company_name']}} </datetime>
                                    </li>
                                  </template>
                                @endforeach
                             @endif
                            {{--button shows remaining vacancies--}}
                            <button x-on:click="open = ! open"> Show more </button>
                        </ul>
                    </div>
                </section>
        </x-main>
    </x-slot>
</x-layout>
