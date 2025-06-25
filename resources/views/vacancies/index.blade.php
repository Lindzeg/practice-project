<x-layout>
    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="vacancies"/>
        </x-slot>

    <x-slot name="main"
        :vacancies="$vacancies">
        <x-main class="vacancies-index">

            <form action="">
                <div class="heading">
                    <h1>Find your vacancy here</h1>
                </div>
                <fieldset>
                    <input type="search" name="searc" id="search" placeholder="find a vacancy">
                    <button>search</button>
                </fieldset>
                <fieldset class="select">
                    <label for="education">Education</label>
                    <select name="education" id="education">
                        <option>Bachelor</option>
                        <option>Doctorate</option>
                        <option>Mater</option>
                        <option>vocational education</option>
                    </select>
                </fieldset>
                <fieldset class="select">
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option>Managment</option>
                        <option>Research</option>
                        <option>Tech</option>
                        <option>Healthcare</option>
                    </select>
                </fieldset>
                 <fieldset class="select">
                    <label for="location">Location</label>
                    <select name="location" id="location">
                        <option>Noord-Brabant</option>
                        <option>Limburg</option>
                        <option>Gelderland</option>
                        <option>Zeeland</option>
                    </select>
                </fieldset>
            </form>
            <div class="vacancy-wrapper">
                @foreach ($vacancies as $vacancy)
                <div class="card">
                    <h3>{{ $vacancy->title }}</h3>
                    <div class="wrapper">
                        <p>{{ $vacancy->employment }}</p>
                        <p>{{ $vacancy->location }}</p>
                        <p>{{ $vacancy->hours }}</p>
                        <p>{{ $vacancy->education }}</p>
                        <p>€ {{ $vacancy->salary }}</p>
                    </div>
                    <p>{{ Str::limit($vacancy->description, 100)}} <a href="vacancies/{{ $vacancy->id }}">read more</a> </p>                  
                    <datetime>{{ $vacancy->employer->company_name . ' ' . ':' . ' ' . $vacancy->created_at }}</datetime>                  
                </div>
                @endforeach
            </div>
        </x-main>
    </x-slot>
</x-layout>
