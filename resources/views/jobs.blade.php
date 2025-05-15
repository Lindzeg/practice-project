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
                    <h2>Don't know wich job would suit you best? See this overview page with details below</h2>
                    <p></p>
                </div>
            </section>

            <section>
                <div class="img-slider">
                    @if (isset($jobs))
                        @foreach ( $jobs as $job )
                            <div class="img-container">
                                <img src="https://images.pexels.com/photos/5971249/pexels-photo-5971249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Director">
                                <li>
                                    <a href="/job/{{ $job['id']}}"><strong>{{ $job['title'] }}
                                        </strong>
                                    </a>
                                    pays {{$job['salary']}} per year
                                </li>
                            </div>
                        @endforeach
                    @endif
                </div>
            </section>
            
        </x-main>
    </x-slot>
</x-layout>
