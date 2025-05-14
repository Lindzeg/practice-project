@props(['jobs'])

<main>
    <section>
        @foreach ( $jobs as $job )
            <li>{{ $job['title'] }} : pays {{$job['salary']}}</li>
        @endforeach
    </section>
</main>
