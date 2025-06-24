@props(['title', 'vacancy'])

    <form method="POST" action="/vacancies/{{ $vacancy->id }}" enctype="multipart/form-data">
        @csrf {{-- sets an unique token --}}
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>We just need a handfull of details from you.</p>
        </div>
        
        <fieldset>
            <label for="title" >Vacancy title</label>
            <input id="title" name="title" type="text" placeholder="Your name..." required>
                @error('title')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="vacancy-details">
            <div class="wrapper">
                <label for="employment">Employment</label>
                <input id="employment" name="employment" type="text" placeholder="fulltime" required>
                    @error('employment')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror             
            </div>
            <div class="wrapper">
                <label for="location">Location</label>
                <input id="location" name="location" type="text" placeholder="Berlin" required>
                    @error('location')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror             
            </div>
            <div class="wrapper">
                <label for="working-hours">Working hours</label>
                <input id="working-hours" name="working-hours" type="text" placeholder="36h" required>
                    @error('working-hours')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror             
            </div>
            <div class="wrapper">
                <label for="education">Education</label>
                <input id="education" name="education" type="text" placeholder="VET Level 4" required>
                    @error('education')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror             
            </div>
            <div class="wrapper">
                <label for="salary">Estimated salary</label>
                <input id="salary" name="salary" type="text" placeholder="€50 000" required>
                    @error('salary')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror             
            </div>
        </fieldset>

        <fieldset>
            <label for="description">Job description</label>
            <textarea id="description" name="description" placeholder="Your job description..." required></textarea>
                @error('description')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="submits">
            <button name='submit' type="submit">save</button>
            <button name='reset' type="reset">cancel</button>
        </fieldset>
    </form>


