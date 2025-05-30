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
            <section>
                <div class="text-container">
                    <h2>Choosing a New Job: A Practical Decision with Long-Term Impact.</h2>
                    <p>Selecting a new job is a significant decision that involves carefulconsideration of both short-term needs and
                        long-term goals.
                        Practical factors such as salary, job stability, benefits, and location play a central role,
                        but it's equally important to assess the company’s culture,
                        opportunities for advancement, and alignment with your skill set.
                        Researching the organization, asking the right questions during interviews,
                        and seeking feedback from current or former employees can provide valuable insights.
                        A well-chosen job not only supports financial security but also contributes to professional development and
                        job satisfaction over time.</p>
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

            <section class="vacancy">
                <div class="vacancy-wrapper">
                    <h2>Job openings</h2>
                    {{--Initialize Alpine.js with 'open' set to false--}}
                        <ul x-data="{ open: false }">
                            {{--loop over first 3 vacancies--}}
                            @if(isset($vacancies))
                                @foreach ($firstVacancies as $vacancy)
                                    <li x-data="{ open : false}">
                                        <h3>{{$vacancy['title']}}</h3>
                                        <p>{{$vacancy['job_info']}}</p>
                                        <datetime>Posted at: {{$vacancy['created_at']}} <br> by: {{$vacancy->employer['company_name']}} </datetime>
                                        <p id="open" x-on:click="open">See more</p>

                                        <div class="expand" x-show="open">                                 
                                            <h2>Vacancy title</h2>
                                            <div class="heading">
                                                <img id="logo" src="https://e7.pngegg.com/pngimages/779/61/png-clipart-logo-idea-cute-eagle-leaf-logo.png" alt="logo">
                                                <button>Apply for the job</button>
                                            </div>

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
                                                    <p>{{$vacancy['about_job'] }} 
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt nibh nec mollis malesuada. </p>
                                                </div>
                                                <div class="text-container">
                                                    <h2>Function discription</h2>
                                                    <p>{{$vacancy['job_info']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                @endforeach

                                {{-- When the button is pressed, open is set to true, and loops over all other available vacancies --}}
                                @foreach ($otherVacancies as $vacancy)
                                  <template x-if="open">
                                    <li x-data="{open: false}">
                                        <h3>{{$vacancy['title']}}</h3>
                                        <p>{{$vacancy['job_info']}}</p>
                                        <datetime>Posted at: {{$vacancy['created_at']}} <br> by: {{$vacancy->employer['company_name']}} </datetime>
                                        <p>See more</p>

                                        <div class="expand" x-show="open">                                 
                                            <h2>Vacancy title</h2>
                                            <div class="heading">
                                                <img id="logo" src="https://e7.pngegg.com/pngimages/779/61/png-clipart-logo-idea-cute-eagle-leaf-logo.png" alt="logo">
                                                <button>Apply for the job</button>
                                            </div>

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
                                                    <p>{{$vacancy['about_job'] }} 
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt nibh nec mollis malesuada. </p>
                                                </div>
                                                <div class="text-container">
                                                    <h2>Function discription</h2>
                                                    <p>{{$vacancy['job_info']}}</p>
                                                </div>
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
                </section>
        </x-main>
    </x-slot>
</x-layout>
