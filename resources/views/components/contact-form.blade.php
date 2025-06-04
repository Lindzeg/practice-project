@props(['title'])

    <form action="">

        <div class="text-container">
            <h2>{{$title}}</h2>
            <p></p>
        </div>

        <fieldset class="personal-info">
            <div class="wrapper">
                <label for="Firt name" >First name</label>
                <input type="text" placeholder="Your name...">
            </div>

            <div class="wrapper">
                <label for="Last name">Last name</label>
                <input type="text" placeholder="Your last name...">
            </div>

        </fieldset>

        <fieldset>
            <label for="Email">Email</label>
            <input type="text" placeholder="Your email...">
        </fieldset>

        <fieldset>
            <label for="Message">Message</label>
            <input type="textarea" placeholder="Write a message...">
        </fieldset>

        <fieldset>
            <button type="submit">submit</button>
        </fieldset>

    </form>

