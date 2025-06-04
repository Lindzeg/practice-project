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
            :vacancyDetails="$vacancyDetails"
        >
            <section class="heading">
                <div class="text-container">
                    <h2>Choosing a New Job: A Practical Decision with Long-Term Impact.</h2>
                </div>
            </section>

            <section class="slider">
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

                <div class="paginate">
                    {{ $jobs->links();}}
                </div>

            </section>

            <section class="vacancy">
                <div class="vacancy-wrapper">
                    <h2>Job openings</h2>
                    {{--Initialize Alpine.js with 'open' set to false--}}
                        <ul x-data="{ open: false}" >
                            {{--loop over first 3 vacancies--}}
                            @if(isset($vacancies))
                                @foreach ($firstVacancies as $vacancy)
                                <li x-data="{toggle: false}" x-bind:class="{ 'toggle' : toggle }" >

                                    <div class="vacancy-item" x-on:click="toggle = ! toggle" role="button">
                                        <h3>{{$vacancy['title']}}</h3>
                                        <p>{{$vacancy['job_info']}}</p>
                                        <datetime>Posted at: {{$vacancy['created_at']}} <br> by: {{$vacancy->employer['company_name']}} </datetime>
                                    </div>

                                    <div class="expand" x-show="toggle"  x-transition.enter.duration.400ms x-transition.leave.duration.500ms>
                                        <h2>Vacancy title</h2>

                                        <div class="vacancy-details">
                                            <ul>
                                                @foreach ($vacancyDetails as $detail)
                                                    <li class="row">
                                                        <img src="{{ asset('storage/' . $detail->img_path) }}" alt="{{ $detail['job_details'] }}">
                                                        <p>{{ $detail['vacancie_details'] }}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="function-discription">
                                            <div class="text-container">
                                                <h2>About the function</h2>
                                                <p>{{$vacancy['about_job']}}</p>
                                            </div>
                                            <div class="text-container">
                                                <h2>Function discription</h2>
                                                <p>{{$vacancy['job_discription']}}</p>
                                            </div>
                                        </div>
                                        <div class="footing">
                                            <button>Apply for the job</button>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                                {{-- When the button is pressed, open is set to true, and loops over all other available vacancies --}}
                                @foreach ($otherVacancies as $vacancy)
                                  <template x-if="open">
                                    <li x-data="{ toggle: false }" :class="{ 'toggle': toggle }">
                                        <div class="vacancy-item" x-on:click="toggle = !toggle" role="button">
                                            <h3>{{ $vacancy['title'] }}</h3>
                                            <p>{{ $vacancy['job_info'] }}</p>
                                            <datetime>
                                                Posted at: {{ $vacancy['created_at'] }} <br>
                                                by: {{ $vacancy->employer['company_name'] }}
                                            </datetime>
                                        </div>

                                        <!-- En dit zit nog steeds in hetzelfde <li> -->
                                        <div class="expand" x-show="toggle" x-transition.enter.duration.400ms x-transition.leave.duration.500ms>
                                            <h2>Vacancy title</h2>


                                            <div class="vacancy-details">
                                                <ul>
                                                    @foreach ($vacancyDetails as $detail)
                                                        <li class="row">
                                                            <img src="{{ asset('storage/' . $detail->img_path) }}" alt="{{ $detail['job_details'] }}">
                                                            <p>{{ $detail['vacancie_details'] }}</p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="function-discription">
                                                <div class="text-container">
                                                    <h2>About the function</h2>
                                                    <p>{{ $vacancy['about_job'] }}</p>
                                                </div>
                                                <div class="text-container">
                                                    <h2>Function discription</h2>
                                                    <p>{{ $vacancy['job_discription'] }}</p>
                                                </div>
                                            </div>

                                            <div class="footing">
                                                <button>Apply for the job</button>
                                            </div>
                                        </div>
                                    </li>
                                </template>
                                @endforeach

                             @endif
                            {{--button shows remaining vacancies--}}
                            <button x-on:click="open = ! open"> Show more </button>
                        </ul>
                    </div>

                    <section class="search">
                        <form action="">
                            <h2>Look for a job, close to you.</h2>
                            <fieldset>
                                <input type="search" placeholder="Search function">
                            </fieldset>

                            <fieldset>
                                <input type="search" placeholder="Search location">
                            </fieldset>
                            <button>Search</button>
                        </form>
                    </section>
            </section>
        </x-main>
    </x-slot>
</x-layout>
