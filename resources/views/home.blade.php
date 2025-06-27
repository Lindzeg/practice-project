
<!-- You can pass information between Blade files in different ways -->

<!-- 1. Props via attributes:
      x-header heading="Homepage" />
     Inside the component: use  $ heading  to display "Homepage"
-->

<!-- 2. Default slot:
      x-header> Homepage </x-header
     Inside the component: use  $ slot  to display "Homepage"
-->

<!-- 3. Named slot (used in layouts):
      x-layout>
         x-slot name="header">
             x-header />
         /x-slot >
      /x-layout >
     Inside the layout component: use  $ header  to include the header content
-->

<!-- 4. Class-based components:
     Define a class in app/View/Components/Header.php with public $ heading
     Then use x-header heading="Homepage" /> and access it in the view with $ heading
-->

<!-- 5. view components structure:
    When making a subfolder in components, the naming will change.
    x-form will be x-forms.form
-->

<x-layout>

    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="home"/>
        </x-slot>

    <x-slot name="main" class="home">
        <x-section class="hero">
            <x-hero class="hero-content"> 
                <h1>Your career <br> our mission</h1>
                <div class="img-container">
                    <img src="{{ asset('img/hero.jpg') }}" alt="">
                </div>
            </x-hero>
        </x-section>


        <x-section class="media"> 
            <div class="media-content">
                <div class="image-container">
                    <img src="{{ asset('img/businessp.jpg') }}" alt="">
                </div>
                <div class="text-container">
                    <h2>Purposeful Work Starts Here</h2>
                    <p>
                        At our core, we believe that work should be more than just a paycheck — it should be a place to grow, to feel valued, and to make a difference. 
                        That’s why we’re on a mission to connect people with jobs that match their skills, passions, and potential. 
                        Whether you’re just starting out or looking for your next big move, we’re here to help you take that step forward with confidence.
                    </p>
                </div>
            </div>
        </x-section>

        <x-main>
            <x-cta.cta-create-job></x-cta.cta-create-job>
        </x-main>

    </x-slot>

</x-layout>


