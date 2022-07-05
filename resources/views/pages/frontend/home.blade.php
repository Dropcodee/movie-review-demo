<x-base-layout>
    <main>
        <section class="w-full mt-12">
            <x-scroll-movies />
        </section>
        <section class="w-full py-48 mx-auto">
            <div class="w-10/12 mx-auto text-center">
                <button
                    class="px-4 py-5 mx-auto text-lg tracking-wide text-center transition-all duration-500 ease-in-out bg-gray-300 hover:bg-red-800 hover:text-gray-100"
                    @click="open = true">Want
                    to tell us about another movie you
                    washed and enjoyed?</button>
            </div>
        </section>
        <div x-show.transition.duration.500ms="open"
            class="fixed inset-0 z-50 flex items-center justify-center px-4 bg-white bg-opacity-70 md:px-0">
            <div class="flex flex-col px-4 py-6 rounded shadow-lg bg-gray-50" @click.away="open = false">
                {{-- modal close icon div --}}
                <div class="flex justify-end float-right w-full text-2xl cursor-pointer">
                    <ion-icon name="close-outline" honclick="IconToggle(this)" @click="open = false"></ion-icon>
                </div>
                {{-- modal close icon div --}}
                <p>Register 🚀</p>
                <p>Welcome to MovieQart, Review and rate your best movies.</p>
            </div>
        </div>
    </main>
</x-base-layout>
