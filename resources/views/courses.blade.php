@extends("layouts.main")
@section("content")
    {{-- Start Courses Section --}}
    <section class="scroll__top mt-40 tablet:mt-0">
        <h2 class="mb-16 text-center">Our Courses</h2>
        <div class="courses_container container mx-auto grid grid-cols-3 gap-8 tablet:grid-cols-2 phone:grid-cols-1">
            @foreach ($courses_data as $course_name => $subjects)
                <article class="course group overflow-hidden rounded-lg border border-color4 bg-color1 text-center shadow-2xl transition-all duration-300 hover:border-color1 hover:bg-transparent hover:text-color1">
                    <div class="course-info p-8 text-white group-hover:text-color1">
                        <h4 class="">{{ $course_name }}</h4>
                        <ul class="mt-5 grid grid-cols-2 gap-4 text-start">
                            @foreach ($subjects["subjects"] as $subject)
                                <li>{{ $subject }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    {{-- End Courses Section --}}

    @include("layouts.footer")
@endsection
