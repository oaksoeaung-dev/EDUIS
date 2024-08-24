@extends("layouts.main")
@section("content")
    {{-- Start Header Section --}}
    <header class="relative top-20 mb-16 h-[100vh] overflow-hidden bg-no-repeat tablet:mb-20 tablet:h-[52vh] phone:mb-0 phone:h-screen" style="background-image: url('{{ asset("images/homeSection/" . $home_data["header_section"]["cover"]) }}'); background-size: 100% auto">
        <div class="relative h-full bg-gray-950/55 tablet:pb-12 phone:mt-0 phone:bg-blue-950 phone:pb-0 phone:text-center">
            <div class="hidden tablet:hidden phone:block">
                <img src="./images/homeSection/{{ $home_data["header_section"]["cover"] }}" />
            </div>
            <div class="scroll__left absolute top-1/2 w-1/2 -translate-y-1/2 ps-40 text-white tablet:w-full tablet:p-4 phone:mb-5 phone:w-full phone:p-4">
                <h1 class="">{{ env("APP_SOLOGRAM", "Laravel") }}</h1>
                <p class="mb-11 mt-4">{!! $home_data["header_section"]["heading"] !!}</p>
            </div>
        </div>
    </header>
    {{-- End Header Section --}}

    {{-- Start Overview About Section --}}
    <section class="h-[32rem] bg-color1 tablet:h-auto">
        <div class="container mx-auto grid grid-cols-[40%_60%] tablet:grid-cols-1 tablet:gap-12">
            <div class="scroll__bottom mr-16 tablet:mr-0">
                <h1 class="mb-12 leading-4 text-white">{{ $home_data["overview_about_section"]["heading"] }}</h1>
                <p class="mb-12 mt-4 font-bold text-white">{{ $home_data["overview_about_section"]["content"] }}</p>
                <div class="flex items-center justify-start phone:justify-center">
                    <a href="{{ route("about") }}" class="btn btn-primary">View More</a>
                </div>
            </div>
            <div class="grid h-[32rem] grid-cols-3 gap-5 tablet:h-auto phone:grid-cols-2 phone:gap-3">
                @foreach ($home_data["overview_about_section"]["obvious_badge"] as $badge => $badge_info)
                    <article class="scroll__badge2 rounded-[2rem] bg-gray-900 p-8 transition-all duration-300 hover:z-[1] hover:shadow-2xl phone:rounded-2xl phone:p-4">
                        <span class="category_icon {{ $badge_info["color"] }} flex h-12 w-12 items-center justify-center rounded-xl text-xl text-white phone:mt-1"><i class="{{ $badge_info["icon"] }}"></i></span>
                        <h5 class="mb-4 mt-8 text-white">{!! $badge_info["name"] !!}</h5>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Overview About Section --}}

    {{-- Start Overview Classes Section --}}
    <section class="scroll__top mt-40 tablet:mt-0">
        <h2 class="mb-16 text-center">{{ $home_data["overview_classes_section"]["heading"] }}</h2>
        <div class="container mx-auto grid grid-cols-3 gap-8 tablet:grid-cols-2 phone:grid-cols-1">
            @foreach ($random_classes as $class => $subjects)
                <article class="group overflow-hidden rounded-lg border border-color4 bg-color1 text-center shadow-2xl transition-all duration-300 hover:border-color1 hover:bg-transparent hover:text-color1">
                    <div class="course-info p-8 text-white group-hover:text-color1">
                        <h4 class="">{!! $class !!}</h4>
                        <ul class="mt-5 grid grid-cols-2 gap-4 text-start">
                            @foreach ($subjects["subjects"] as $subject)
                                <li>{!! $subject !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-10 flex items-center justify-center">
            <a href="{{ route("courses") }}" class="btn btn-primary">View More</a>
        </div>
    </section>
    {{-- End Overview Classes Section --}}

    {{-- Start Faq Section --}}
    <section class="scroll__top bg-color1 shadow-2xl">
        <h2 class="mb-16 text-center text-white">{{ $home_data["faqs_section"]["heading"] }}</h2>
        <div class="container mx-auto grid grid-cols-2 gap-4 tablet:grid-cols-1">
            @foreach ($home_data["faqs_section"]["questions"] as $questions)
                <article class="faq open flex h-fit cursor-pointer items-center gap-6 rounded-lg bg-color4 p-8 tablet:p-6">
                    <div class="faq__icon self-start text-xl">
                        <i class="fi fi-rs-angle-up"></i>
                    </div>
                    <div class="">
                        <h4 class="text-base font-bold">{!! $questions["question"] !!}</h4>
                        <p class="answer h-0 overflow-hidden transition-all duration-500">{!! $questions["answer"] !!}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    {{-- Start Faq Section --}}

    {{-- Start Testimonials Section --}}
    <section class="testimonial-swiper scroll__top container relative mx-auto mb-20 overflow-x-hidden">
        <h2 class="mb-16 text-center">{{ $home_data["testimonials_section"]["heading"] }}</h2>
        <div class="swiper-wrapper">
            @foreach ($home_data["testimonials_section"]["testimonials"] as $student)
                <article class="testimonial swiper-slide pt-8">
                    <div class="avatar mx-auto mb-4 mt-0 h-32 w-32 overflow-hidden rounded-full border-[1rem] border-color3">
                        <img src="{{ asset("images/studentImages/" . $student["image"]) }}" />
                    </div>
                    <div class="testimonial__info text-center">
                        <h5>{{ $student["name"] }}</h5>
                        <small>{{ $student["grade"] }}</small>
                    </div>
                    <div class="testimonials__body before:contents-[''] relative mt-12 bg-color1 p-8 text-white before:absolute before:-top-6 before:left-1/2 before:block before:h-12 before:w-12 before:-translate-x-1/2 before:rotate-45 before:bg-color1 phone:p-5">
                        <p>{!! $student["testimonial"] !!}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>
    </section>
    {{-- End Testimonials Section --}}

    @include("layouts.footer")
@endsection
