<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nollywood Movies Ratings and Reward Platform For Avid Fans - MovieQart</title>
    <meta name="description"
        content="We know you love watching your favorite actors; we think you should be more involved by rating, commenting and get rewarded for the movies you watch.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://mir-s3-cdn-cf.behance.net/project_modules/disp/75269f144806585.62933cebd2035.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-013K4LNBD8"></script>

<body x-data="{
    open: false,
    authPage: 'login',
    toggle() {
        this.open = !this.open;
    },
    triggerAuth() {
        this.open = !this.open;
        this.authPage = 'login';
    }
}">
    <header>
        <x-desktop-navbar />
        @include('partials._home-hero')
    </header>
    {{ $slot }}
    @include('partials._footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function IconToggle(e) {
            let menuList = document.querySelector('#menu')
            let classArr = ['opacity-100', 'top-[80px]']
            let removeClassArr = ['opacity-0', 'top-[-100px]']
            // console.log(e.name)
            if (e.name === 'menu-outline') {
                e.name = 'close-outline'
                menuList.classList.remove(...removeClassArr)
                menuList.classList.add(...classArr)
                // console.log(e.name)
            } else if (e.name === 'close-outline') {
                e.name = 'menu-outline'
                menuList.classList.remove(...classArr)
                menuList.classList.add(...removeClassArr)
                // console.log(e.name)
            }
        }
    </script>
</body>

</html>
