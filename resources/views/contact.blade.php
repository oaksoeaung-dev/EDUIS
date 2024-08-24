@extends("layouts.main")
@section("content")
<section class="">
    <div class="container mx-auto my-28 grid h-[30rem] grid-cols-[30%_70%] gap-16 rounded-[4rem] bg-gray-900 p-16 tablet:mt-12 tablet:h-auto tablet:grid-cols-[40%_60%] tablet:gap-6 tablet:p-6 phone:mt-0 phone:grid-cols-1 phone:gap-12 phone:p-0">
        <!-- //contact aside -->
        <aside class="scroll__top relative bottom-32 rounded-2xl bg-color1 p-12 tablet:bottom-0 tablet:w-auto tablet:p-6">
            <div class="mb-8 w-48">
                <img src="./images/contact.svg" />
            </div>
            <h2 class="mb-4 text-start text-white">Contact Us</h2>
            <ul class="text-white">
                <li class="mb-4 flex items-center gap-4">
                    <i class="fi fi-sr-business-time"></i>
                    <h5>{{ env("APP_WORKHOUR", "Laravel") }}</h5>
                </li>
                <li class="mb-4 flex items-center gap-4">
                    <i class="fi fi-sr-mobile-button"></i>
                    <h5>{{ env("APP_PHONE1", "Laravel") }}</h5>
                </li>
                <li class="mb-4 flex items-center gap-4">
                    <i class="fi fi-sr-mobile-button"></i>
                    <h5>{{ env("APP_PHONE2", "Laravel") }}</h5>
                </li>
                <li class="mb-4 flex items-center gap-4">
                    <i class="fi fi-sr-envelope"></i>
                    <h5 class="">{{ env("APP_EMAIL", "Laravel") }}</h5>
                </li>
                <li class="mb-4 flex items-center gap-4">
                    <i class="fi fi-sr-region-pin"></i>
                    <h5>{{ env("APP_ADDRESS", "Laravel") }}</h5>
                </li>
            </ul>

            <ul class="mt-12 flex gap-3">
                <li>
                    <x-social-link href="{{ env('APP_FACEBOOK', 'Laravel') }}"><i class="fi fi-brands-facebook"></i></x-social-link>
                </li>
                <li>
                    <x-social-link href="{{ env('APP_TIKTOK', 'Laravel') }}"><i class="fi fi-brands-tik-tok"></i></x-social-link>
                </li>
            </ul>
        </aside>

        <div class="mr-16 tablet:mr-6 phone:my-6 phone:mb-12 phone:mr-0 phone:p-4">
            <iframe class="h-96 w-full" src="{{ env("APP_GOOGLEMAP", "Laravel") }}" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

    @include("layouts.footer")
@endsection
