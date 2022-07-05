<div class="bg-gray-400 w-full py-[1.6rem] sm:px-[3rem] shadow-lg">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center justify-between mx-[1rem]">
            <span class="cursor-pointer">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/dca651144806585.6293d6cc100a6.png"
                    alt="movieqart logo" class="inline h-auto w-28 md:w-36">
            </span>
            <span class="text-3xl cursor-pointer">
                <ion-icon name="menu-outline" class="block sm:hidden" onclick="IconToggle(this)"></ion-icon>
            </span>
        </div>
        <ul id="menu"
            class="sm:py-0 py-2 sm:pl-0 pl-[1rem] absolute w-full mt-4 space-y-4 bg-gray-400 shadow-md sm:w-auto sm:bg-transparent sm:shadow-none sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:space-y-0 sm:mt-0 sm:z-auto sm:static sm:opacity-100 opacity-0 top-[-100px] transition-all duration-500 ease-out">
            <li class="bg-transparent border-0 cursor-pointer text-slate-800 hover:text-red-800">Sponsor a deal</li>
            <li class="bg-transparent border-0 cursor-pointer text-slate-800 hover:text-red-800" @click="open = true">
                Login</li>
        </ul>
    </div>
</div>
