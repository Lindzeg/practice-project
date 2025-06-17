@props(['title'])
<form action="" method="post">
     @csrf
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>Fill in your information</p>
        </div>

        <fieldset class="username">
            <label for="username">Your username</label>
            <input id="username" name="username" type="text" placeholder="JaneDoe" required >
                @error('username')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="password">Your password</label>
            <input id="password" name="password" type="textarea" placeholder="Your password" required></input>
                @error('password')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="fp">
            <a>Forgot your password?</a>
        </fieldset>

</form>
