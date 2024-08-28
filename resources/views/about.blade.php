@extends("layouts.main")
@section("content")
    {{-- Start Welcome Section --}}
    <section class="mt-12 tablet:mt-8">
        <div class="container mx-auto grid grid-cols-[40%_60%] gap-20 tablet:grid-cols-1 tablet:gap-16">
            <div class="scroll__top tablet:mx-auto tablet:my-0 tablet:w-4/5">
                <img src="{{ asset("images/aboutSection/" . $about_data["welcome_section"]["image"]) }}" class="w-full rounded-[20px] rounded-br-[50px] rounded-tl-[100px]" />
            </div>

            <div class="">
                <h1 class="scroll__left phone:text-center">{!! $about_data["welcome_section"]["heading"] !!}</h1>
                <p class="mb-10 mt-6">{!! $about_data["welcome_section"]["content"] !!}</p>
                <!-- Cards -->
                <div class="grid grid-cols-3 gap-6 phone:grid-cols-2 phone:gap-3">
                    @foreach ($about_data["welcome_section"]["overall_count"] as $data)
                        <article class="rounded-2xl border border-transparent bg-gray-900 p-6 text-center text-white transition-all duration-300 hover:border-gray-900 hover:bg-color4 hover:text-gray-900 hover:shadow-2xl">
                            <span class="{!! $data["color"] !!} mb-8 inline-flex h-20 w-20 items-center justify-center rounded-2xl text-center text-xl"><i class="{{ $data["icon"] }} text-white"></i></span>
                            <h3 class="text-center">{!! $data["count"] !!}</h3>
                            <p class="mb-10 mt-6">{!! $data["name"] !!}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- End Welcome Section --}}

    {{-- Start About Educator Section --}}
    <section class="mt-12 tablet:mt-8">
        <div class="container mx-auto grid grid-cols-[40%_60%] gap-20 tablet:grid-cols-1 tablet:gap-16">
            <div class="scroll__bottom">
                <h1 class="phone:text-center">{!! $about_data["about_educator_section"]["heading"] !!}</h1>
                <p class="mb-10 mt-6">{!! $about_data["about_educator_section"]["content"] !!}</p>
            </div>

            <div class="scroll__right place-self-end tablet:mx-auto tablet:my-0 tablet:w-4/5 phone:place-self-auto">
                <img src="{{ asset("images/aboutSection/" . $about_data["about_educator_section"]["image"]) }}" class="h-[700px] w-[600px] overflow-hidden rounded-3xl" />
            </div>
        </div>
    </section>
    {{-- End About Educator Section --}}

    {{-- Start About Online Learning Section --}}
    <section class="mt-12 tablet:mt-8">
        <div class="container mx-auto grid grid-cols-[40%_60%] gap-20 tablet:grid-cols-1 tablet:gap-16">
            <div class="scroll__left tablet:mx-auto tablet:my-0 tablet:w-4/5">
                <img src="{{ asset("images/aboutSection/" . $about_data["about_online_learning_section"]["image"]) }}" class="overflow-hidden rounded-[30px] rounded-bl-[80px] rounded-tr-[100px]" />
            </div>
            <div class="scroll__top">
                <h1 class="phone:text-center">{!! $about_data["about_online_learning_section"]["heading"] !!}</h1>
                <p class="mb-10 mt-6">{!! $about_data["about_online_learning_section"]["content"] !!}</p>
            </div>
        </div>
    </section>
    {{-- End About Online Learning Section --}}

    {{-- Start About Classrooms Section --}}
    <section class="mt-12 tablet:mt-8">
        <div class="container mx-auto grid grid-cols-[40%_60%] gap-20 tablet:grid-cols-1 tablet:gap-16">
            <div class="scroll__right">
                <h1 class="phone:text-center">{!! $about_data["about_classrooms_section"]["heading"] !!}</h1>
                <p class="mb-10 mt-6">{!! $about_data["about_classrooms_section"]["content"] !!}</p>
            </div>
            <div class="scroll__left place-self-end tablet:mx-auto tablet:my-0 tablet:w-4/5 phone:place-self-auto">
                <img src="{{ asset("images/aboutSection/" . $about_data["about_classrooms_section"]["image"]) }}" class="w-[600px] overflow-hidden rounded-[20px] rounded-tr-[100px]" />
            </div>
        </div>
    </section>
    {{-- End About Classrooms Section --}}

    {{-- Start Team Section --}}
    <section class="team bg-color1 shadow-2xl">
        <h2 class="mb-16 text-center text-white">{!! $about_data["team_section"]["heading"] !!}</h2>
        <div class="container mx-auto grid grid-cols-3 gap-8 tablet:grid-cols-3 tablet:gap-6 phone:grid-cols-2 phone:gap-7">
            @foreach ($about_data["team_section"]["members"] as $member)
                <article class="group relative overflow-hidden rounded-lg border border-transparent bg-color4 p-8 transition-all duration-300 hover:border-color4 hover:bg-transparent tablet:p-4 phone:p-0">
                    <div class="h-96 w-full overflow-hidden rounded-lg">
                        <img src="{{ asset("images/aboutSection/teamMembers/" . $member["image"]) }}" class="h-full w-full object-contain transition-all duration-300 group-hover:saturate-100" />
                    </div>
                    <div class="mt-6 text-center group-hover:text-color4">
                        <h4>{!! $member["name"] !!}</h4>
                        <p class="phone:mb-6">{!! $member["position"] !!}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    {{-- End Team Section --}}

    @include("layouts.footer")
@endsection
