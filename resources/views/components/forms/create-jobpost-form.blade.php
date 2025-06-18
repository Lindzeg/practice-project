@props(['title'])

    <form method="POST" action="/jobs" enctype="multipart/form-data">
        @csrf {{-- sets an unique token --}}
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>We just need a handfull of details from you.</p>
        </div>

        <fieldset class="job-info">
            <div class="wrapper">
                <label for="job-title" >Job title</label>
                <input id="job-title" name="job-title" type="text" placeholder="Your name..." required>
                    @error('job-title')
                       <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror
            </div>

            <div class="wrapper">
                <label for="author">Author</label>
                <input id="author" name="author" type="text" placeholder="Your name..." required>
                    @error('author')
                        <p class="text-red-500 text-sm"> {{ $message }} </p>
                    @enderror
            </div>
        </fieldset>

        <fieldset class="quantity">
            <label for="Salary">Estimated salary</label>
            <input id="salary" name="salary" type="test" placeholder="€50 000" required>
                @error('salary')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="job-description">Job description</label>
            <textarea id="job-description" name="job-description" placeholder="Your job description..." required></textarea>
                @error('job-description')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="file-upload" id="file-upload">choose file
                <span>
                    <svg class="size-8 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5
                            18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.
                            5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                </span>
            </label>
            <input id="file-upload" name="file-upload" type="file" placeholder="PNG, JPG up to 10MB" required >
                @error('file-upload')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="submits">
            <button name='submit' type="submit">save</button>
            <button name='reset' type="reset">cancel</button>
        </fieldset>
    </form>


