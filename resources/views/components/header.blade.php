@props(['heading'])
<header>
    <div class="text-container">
        <h1 class="heading">You're currently on the <span>{{ $heading }}</span> page</h1>
         {{-- @auth --}}
         <div class="wrapper">
            <x-nav-link href="jobs/create" :active="request()->is('jobs.create')">Create job post</x-nav-link>
            <x-nav-link href="vacancies/create" :active="request()->is('vacancies.create')">Create vacancy</x-nav-link>
        </div>
        {{-- @endauth --}}
    </div>
</header>
