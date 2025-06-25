@props(['title', 'job'])

    <form method="POST" action="/jobs/{{ $job->id }}" enctype="multipart/form-data">
        @csrf {{-- sets an unique token --}}
        @method('PATCH')
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>We just need a handfull of details from you.</p>
        </div>

        <fieldset>
            <label for="title" >Job title</label>
            <input id="title" name="title" type="text" placeholder="Your name..." required value="{{ $job->title }}">
                @error('title')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="quantity">
            <label for="salary">Estimated salary</label>
            <input id="salary" name="salary" type="text" placeholder="€50 000" required value="{{ $job->salary }}">
                @error('salary')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="description">Job description</label>
            <textarea id="description" name="description" placeholder="Your job description..." required>{{ $job->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="file-upload" id="file-upload">upload file
                <span>
                    <svg class="size-8 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5
                            18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.
                            5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                </span>
            </label>
            <input id="file-upload" name="file-upload" type="file" required>
                @error('file-upload')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="submits">
                <button name='submit' type="submit">update</button>
                <a href="{{ route('jobs.show', $job->id) }}">cancel</a>
        </fieldset>
    </form>


