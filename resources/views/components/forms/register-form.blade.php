@props(['title'])

<form action="/register" method="POST">
     @csrf
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>Fill in your information.</p>
        </div>

        <fieldset>
            <label for="first_name">Your first name</label>
            <input id="first_name" name="first_name" type="text" placeholder="Jane"  >
                @error('first_name')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="last_name">Your last name</label>
            <input id="last_name" name="last_name" type="text" placeholder="Doe"  >
                @error('last_name')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="email">Your e-mail</label>
            <input id="email" name="email" type="email" placeholder="Janedoe@gmail.com" >
                @error('email')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="password">Your password</label>
            <input id="password" name="password" type="password" placeholder="Your password" >
                @error('password')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" >
                @error('password_confirmation')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
                <button>Register</button>
        </fieldset>

</form>

