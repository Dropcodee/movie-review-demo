<x-base-layout>
    <header>
        <x-desktop-navbar />
        @include('partials._home-hero')
    </header>
    <main>
        <div class="mt-12 w-full">
            <x-scroll-movies />
        </div>
    </main>
</x-base-layout>
