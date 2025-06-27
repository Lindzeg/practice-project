<section class="create-job">
    @auth
        <div class="wrapper">
            <h2>Create your own job post</h2>
            <p>Do you work in an industry you'd like to talk about? Create your own job post here.</p>
            <a href="{{ route('jobs.create') }}">create</a>
        </div>
        @endauth
        @guest
            <div class="wrapper">
            <h2>Log in to create your own job posts</h2>
            <p>Do you work in an industry you'd like to talk about? Create your own job post here.</p>
            <a href="/login">log in</a>
        </div>
    @endguest
</section>