@props(['title'])

    <form action="">

        <div class="text-container">
            <h2>{{$title}}</h2>
            <p></p>
        </div>

        <fieldset class="job-info">
            <div class="wrapper">
                <label for="job-title" >Job title</label>
                <input id="job-title" name="job-title" type="text" placeholder="Your name...">
            </div>

            <div class="wrapper">
                <label for="job-subtitle">Job subtitle</label>
                <input id="job-subtitle" name="job-subtitle" type="text" placeholder="Your last name...">
            </div>

        </fieldset>

        <fieldset>
            <label for="job-description">Job description</label>
            <textarea id="job-description" name="job-description" type="textarea" placeholder="Your job description..."></textarea>
        </fieldset>

        <fieldset>
            <label for="file-uplaod">Upload your file
                <span>
                    <svg class="size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5
                            18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.
                            5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                </span>
            </label>

            <input id="file-upload" name="file-upload" type="textarea" placeholder="PNG, JPG up to 10MB">
        </fieldset>

        <fieldset>
            <button type="submit">submit</button>
        </fieldset>

    </form>

