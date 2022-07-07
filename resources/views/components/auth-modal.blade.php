<div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.400ms
    class="fixed inset-0 z-50 flex items-center justify-center px-4 bg-white bg-opacity-70 md:px-0">
    <div class="flex flex-col w-full md:w-[30rem] lg:w-[40rem] px-4 py-6 rounded shadow-lg bg-gray-50"
        @click.away="open = false">
        {{-- modal close icon div --}}
        <div class="flex justify-end float-right w-full text-2xl cursor-pointer">
            <ion-icon name="close-outline" @click="open = false"></ion-icon>
        </div>
        {{-- modal close icon div --}}
        <div x-show="authPage === 'login'" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
            <div class="px-6 py-3 md:px-12 md:py-2">
                <div class="mb-4 text-center">
                    <h2 class="text-xl tracking-wide md:text-3xl">Login</h2>
                    <p class="text-sm text-gray-400">Review all your favorite movies</p>
                </div>
                <div class="grid w-full grid-cols-1">
                    <div class="my-3">
                        <label for="username" class="block w-full mb-1 text-gray-500">Enter Username:</label>
                        <input type="text" placeholder="Dropcode" name="username"
                            class="w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary">
                    </div>
                    <div class="my-3">
                        <label for="username" class="block w-full mb-1 text-gray-500">Enter Password:</label>
                        <input type="password" placeholder="Dropcode" name="username"
                            class="w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary">
                    </div>
                    <div class="my-8">
                        <button
                            class="w-full p-3 tracking-wide text-gray-300 transition-all duration-500 ease-in-out bg-gray-800 hover:bg-red-800">Login</button>
                    </div>
                    <p>Don't Have an account yet ? <span class="text-red-800 underline" x-data
                            @click="authPage = 'register'">Register</span></p>
                </div>
            </div>
        </div>
        <div x-show="authPage === 'register'" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
            <p>Register</p>
        </div>
    </div>
</div>
