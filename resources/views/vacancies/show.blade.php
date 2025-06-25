<x-layout>

    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="vacancy"/>
        </x-slot>

    <x-slot name="main">
        <x-main class="vacancy show" :vacancy="$vacancy">
            <div class="vacancy">                          
                <h2>{{ $vacancy->title}}</h2>               
                <h4>Author: {{ $vacancy->employer->user->first_name  }}</h4>
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
                    <div class="text-container">
                        <h3>vacancy discription</h3>
                        <p>{{$vacancy->description}}</p>
                        <p>The estimate salary for this vacancy is around € {{$vacancy->salary }} per year. </p>
                        <a>Apply</a> 
                    </div>
                </div>

                @auth
                    @if (auth()->user()->employer->id === $vacancy->employer->id)
                        <div class="button-wrapper">
                            <a href="{{ route('vacancies.edit', $vacancy->id) }}">Edit vacancy</a>
                            <button form="delete">Delete vacancy</button>
                        </div> 
                    @endif 
                 @endauth

                <form method="POST" action="/vacancies/{{ $vacancy->id }}" id="delete" class='hidden'>
                    @csrf
                    @method('DELETE')
                </form>
        </x-main>
    </x-slot>
</x-layout>
