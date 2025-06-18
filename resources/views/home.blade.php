
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
    <x-form/> will be <x-forms.form/>
-->

<x-layout>

    <x-slot name="nav">
        <x-nav/>
    </x-slot>

      <x-slot name="header">
            <x-header heading="home"/>
        </x-slot>

    <x-slot name="main">
        <x-main>

        </x-main>
    </x-slot>

</x-layout>


