@props(['title'])
<form action="/login" method="POST">
     @csrf
        <div class="text-container">
            <h2>{{$title}}</h2>
            <p>Fill in your information.</p>
        </div>

        <fieldset>
            <label for="email">Your e-mail</label>
            <input id="email" name="email" type="email" placeholder="janedoe@gmail.com" :value="old('email')" required >
                @error('email')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset>
            <label for="password">Your password</label>
            <input id="password" name="password" type="password" placeholder="Your password" required></input>
                @error('password')
                    <p class="text-red-500 text-sm"> {{ $message }} </p>
                @enderror
        </fieldset>

        <fieldset class="fp">
            <button>Login</button>
            <a>Forgot your password?</a>
            <a>Forgot your e-mail?</a>
        </fieldset>

</form>
