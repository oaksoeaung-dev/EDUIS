<footer class="bg-color1 pt-20 text-sm">
    <div class="container mx-auto grid grid-cols-4 gap-20 text-white tablet:grid-cols-2 phone:grid-cols-1 phone:gap-8 phone:text-center">
        <div class="">
            <a href="{{ route("home") }}"><h4 class="mb-4">{{ env("APP_NAME", "Laravel") }}</h4></a>
            <p class="mx-auto mb-8 phone:my-4">{{ env("APP_SOLOGRAM", "Laravel") }}</p>
        </div>

        <div class="">
            <h4 class="mb-5">Permalinks</h4>
            <ul class="">
                <li class="mb-3"><a href="{{ route("home") }}" class="hover:underline">Home</a></li>
                <li class="mb-3"><a href="{{ route("about") }}" class="hover:underline">About</a></li>
                <li class="mb-3"><a href="{{ route("courses") }}" class="hover:underline">Courses</a></li>
                <li class="mb-3"><a href="{{ route("activities") }}" class="hover:underline">Activities</a></li>
                <li class="mb-3"><a href="{{ route("contact") }}" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <div class="">
            <h4 class="mb-5">Contact Us</h4>
            <div class="space-y-5">
                <p class="flex items-center gap-2">
                    <i class="fi fi-sr-mobile-button"></i>
                    <span>{{ env("APP_PHONE1", "Laravel") }}</span>
                    <i class="fi fi-sr-mobile-button"></i>
                    <span>{{ env("APP_PHONE2", "Laravel") }}</span>
                </p>
                <p class="flex items-center gap-3">
                    <i class="fi fi-sr-envelope"></i>
                    <span>{{ env("APP_EMAIL", "Laravel") }}</span>
                </p>
            </div>

            <ul class="mt-8 flex gap-4 text-xl text-color1 phone:justify-center">
                <li>
                    <x-social-link href="{{ env('APP_FACEBOOK', 'Laravel') }}"><i class="fi fi-brands-facebook"></i></x-social-link>
                </li>
                <li>
                    <x-social-link href="{{ env('APP_TIKTOK', 'Laravel') }}"><i class="fi fi-brands-tik-tok"></i></x-social-link>
                </li>
            </ul>
        </div>
    </div>
    <div class="mt-16 border-t border-t-color4 py-5 text-center text-white">
        <small>Copyright &copy; {{ env("APP_NAME", "Laravel") }}</small>
    </div>
</footer>
