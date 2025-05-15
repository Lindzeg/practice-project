@props(['jobs'])

<main>
    <section>
         @if (isset($jobs))
            @foreach ( $jobs as $job )
                <li>{{ $job['title'] }} : pays {{$job['salary']}}</li>
            @endforeach
         @endif
    </section>
</main>
