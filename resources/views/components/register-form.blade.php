@props(['title'])

<form action="" method="post">
     @csrf
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>Fill in your information</p>
        </div>

        <fieldset class="name">
            <label for="name">Your name</label>
            <input id="name" name="name" type="text" placeholder="Jane Doe" required >
                @error('name')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="username">
            <label for="username">Your username</label>
            <input id="username" name="username" type="text" placeholder="JaneDoe" required >
                @error('username')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="email">
            <label for="email">Your email</label>
            <input id="email" name="email" type="email" placeholder="Janedoe@gmail.com" required>
                @error('email')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="password">Your password</label>
            <input id="password" name="password" type="text" placeholder="Your password" required>
                @error('password')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>
        <fieldset>
                <button>Register</button>
        </fieldset>
</form>

