<nav class="fixed top-0 z-10 h-20 w-screen bg-white">
    <div class="container mx-auto flex h-full items-center justify-between">
        <a href="index.html" class="flex items-center">
            <img src="{{ asset("images/logo.png") }}" class="w-20" />
            <h4 class="">{{ config("app.name", "Laravel") }}</h4>
        </a>
        <ul class="nav__menu flex items-center gap-16 tablet:fixed tablet:right-[5%] tablet:top-20 tablet:hidden tablet:h-fit tablet:w-72 tablet:flex-col tablet:gap-0 phone:right-[3%]">
            <li class="tablet:h-24 tablet:w-full tablet:origin-top-right tablet:animate-rotateNav tablet:opacity-0">
                <x-nav-link :active="request()->routeIs('home')" :href="route('home')">Home</x-nav-link>
            </li>
            <li class="tablet:h-24 tablet:w-full tablet:origin-top-right tablet:animate-rotateNav tablet:opacity-0" style="animation-delay: 200ms">
                <x-nav-link :active="request()->routeIs('about')" :href="route('about')">About</x-nav-link>
            </li>
            <li class="tablet:h-24 tablet:w-full tablet:origin-top-right tablet:animate-rotateNav tablet:opacity-0" style="animation-delay: 400ms">
                <x-nav-link :active="request()->routeIs('courses')" :href="route('courses')">Courses</x-nav-link>
            </li>
            <li class="tablet:h-24 tablet:w-full tablet:origin-top-right tablet:animate-rotateNav tablet:opacity-0" style="animation-delay: 600ms">
                <x-nav-link :active="request()->routeIs('activities')" :href="route('activities')">Activities</x-nav-link>
            </li>
            <li class="tablet:h-24 tablet:w-full tablet:origin-top-right tablet:animate-rotateNav tablet:opacity-0" style="animation-delay: 800ms">
                <x-nav-link :active="request()->routeIs('contact')" :href="route('contact')">Contact</x-nav-link>
            </li>
        </ul>
        <button data-collapse-toggle="navbar-default" type="button" class="toggle relative hidden h-[40px] w-[70px] cursor-pointer items-center justify-center overflow-hidden tablet:flex" aria-controls="navbar-default" aria-expanded="false">
            <span id="line1" class="absolute left-[15px] h-[4px] w-[26px] -translate-y-[8px] rounded bg-color1 delay-100 duration-500"></span>
            <span id="line2" class="absolute h-[4px] w-[40px] rounded bg-color1 duration-500"></span>
            <span id="line3" class="absolute left-[15px] h-[4px] w-[15px] translate-y-[8px] rounded bg-color1 delay-75 duration-500"></span>
        </button>
    </div>
</nav>
