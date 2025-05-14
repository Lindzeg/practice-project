
<nav>
    <div class="nav-wrapper">
        <div class="img-container logo">
            <img class="logo" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="logo">
        </div>

        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link> <!--insert class for active so it's styleable in css-->
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <x-nav-link></x-nav-link>

    </div>

    <div class="img-wrapper">
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
        <img class="profile" alt="profile picture" src="https://cdn.cdnstep.com/eXGVHU0Bgig3Q7pPvIni/1.thumb128.png" alt="">
    </div>
</nav>


