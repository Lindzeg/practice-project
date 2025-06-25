<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="job Listings"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="jobs-index"
            :jobs="$jobs"
            :vacancies="$vacancies"
            :firstVacancies="$firstVacancies"
            :otherVacancies="$otherVacancies"
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
                                <img src="{{ asset('storage/' . $job->img_path) }}" alt={{ $job->title }}>
                            </div>
                                <li>
                                    <a href="{{ route('jobs.show', $job->id) }}"><strong>View {{ $job->title }}</strong></a>
                                    <br>
                                    pays € {{$job->salary}} per year
                                </li>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="paginate">
                    {{ $jobs->links();}}
                </div>
            </section>

            <section class="create-job">
                @auth
                    <div class="wrapper">
                        <h2>Create your own job post</h2>
                        <p>Do you work in an industry you'd like to talk about? Create your own job post here.</p>
                        <a href="{{ route('jobs.create') }}">create</a>
                    </div>
                    @endauth
                    @guest
                        <div class="wrapper">
                        <h2>Log in to create your own job posts</h2>
                        <p>Do you work in an industry you'd like to talk about? Create your own job post here.</p>
                        <a href="/login">log in</a>
                    </div>
                @endguest
            </section>

            <section class="vacancies-list">
                <div class="vacancy-wrapper">
                    <h2>Job openings</h2>
                    {{--Initialize Alpine.js with 'open' set to false--}}
                        <ul x-data="{ open: false}" >
                            {{--loop over first 3 vacancies--}}
                            @if(isset($vacancies))
                                @foreach ($firstVacancies as $vacancy)
                                    <li x-data="{toggle: false}" x-bind:class="{ 'toggle' : toggle }" >

                                        <div class="vacancy-item" x-on:click="toggle = !toggle" role="button">
                                            <h3>{{ $vacancy->title }}</h3>
                                            <p>{{ $vacancy->vacancy_intro }}</p>
                                            <datetime>
                                                Posted at: {{ $vacancy->created_at }} <br>
                                                by: {{ $vacancy->employer->company_name }}
                                            </datetime>
                                        </div>

                                        <div class="expand" x-show="toggle" x-transition.enter.duration.400ms x-transition.leave.duration.500ms>
                                            <h2>Vacancy title</h2>

                                            <div class="details-wrapper">
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/suitcase.png') }}" alt="">
                                                    <p>{{$vacancy->employment}}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/building.png') }}" alt="b">
                                                    <p>{{$vacancy->location}}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/clock.png') }}" alt="">
                                                    <p>{{$vacancy->hours . 'h' }}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/hat.png') }}" alt="">
                                                    <p>{{$vacancy->education}}</p>
                                                </div>
                                            </div>                                        

                                            <div class="function-discription">
                                                <div class="text-container">
                                                    <h2>Function discription</h2>
                                                        <p>{{ $vacancy->description }}</p>
                                                </div>
                                            </div>

                                            <div class="footing">
                                                <a href="{{ route('vacancies.show', $vacancy->id) }}">Apply for the job >></a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                                {{-- When the button is pressed, open is set to true, and loops over all other available vacancies --}}
                                @foreach ($otherVacancies as $vacancy)
                                  <template x-if="open">
                                    <li x-data="{ toggle: false }" :class="{ 'toggle': toggle }">

                                        <div class="vacancy-item" x-on:click="toggle = !toggle" role="button">
                                            <h3>{{ $vacancy->title }}</h3>
                                            <p>{{ $vacancy->vacancy_intro }}</p>
                                            <datetime>
                                                Posted at: {{ $vacancy->created_at }} <br>
                                                by: {{ $vacancy->employer->company_name }}
                                            </datetime>
                                        </div>

                                        <div class="expand" x-show="toggle" x-transition.enter.duration.400ms x-transition.leave.duration.500ms>
                                            <h2>Vacancy title</h2>

                                            <div class="details-wrapper">
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/suitcase.png') }}" alt="">
                                                    <p>{{$vacancy->employment}}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/building.png') }}" alt="b">
                                                    <p>{{$vacancy->location}}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/clock.png') }}" alt="">
                                                    <p>{{$vacancy->hours . 'h' }}</p>
                                                </div>
                                                <div class="wrapper">
                                                    <img src="{{ asset('storage/img/hat.png') }}" alt="">
                                                    <p>{{$vacancy->education}}</p>
                                                </div>
                                            </div>                                        

                                            <div class="function-discription">
                                                <div class="text-container">
                                                    <h2>Function discription</h2>
                                                        <p>{{ $vacancy->description }}</p>
                                                </div>
                                            </div>

                                            <div class="footing">
                                                <a href="{{ route('vacancies.show', $vacancy->id) }}">Apply for the job >></a>
                                            </div>
                                        </div>
                                    </li>
                                </template>
                                @endforeach
                             @endif
                            {{--button shows remaining vacancies--}}
                            <button x-on:click="open = ! open"> show more </button>
                        </ul>
                    </div>

                    <div class="search">
                        <form action="">
                            <h2>Look for a job, close to you.</h2>
                            <fieldset>
                                <input type="search" placeholder="Search function">
                            </fieldset>

                            <fieldset>
                                <input type="search" placeholder="Search location">
                            </fieldset>
                            <button>search</button>
                        </form>
                    </div>
            </section>
        </x-main>
    </x-slot>
</x-layout>
