@extends("layouts.main")
@section("content")
    <section class="team bg-blue-900 shadow-2xl">
        <h2 class="mb-16 text-center text-white">Our Activities</h2>
        <div class="container mx-auto flex flex-wrap">
            @for ($i = 0; $i < 4;$i++)
                @php
                    $chunk = array_slice($activities_data, $i * $chunkSize, $chunkSize);
                @endphp

                <div class="max-w-[25%] flex-[25%] tablet:max-w-[50%] tablet:flex-[50%] phone:max-w-full phone:flex-[100%]">
                    @foreach ($chunk as $data)
                        <article class="group relative overflow-hidden border border-transparent bg-color4 p-2 transition-all duration-300 hover:border-color4 hover:bg-transparent tablet:p-4 phone:p-0">
                            <div class="">
                                <img src="{{ asset("images/activitiesSection/" . $data["image"]) }}" class="transition-all duration-300" />
                            </div>
                            <div class="social absolute inset-x-0 -bottom-full flex-col rounded-t-2xl bg-color3 p-3 shadow-2xl transition-all duration-300 group-hover:bottom-0">
                                <p class="text-center font-bold text-white">{!! $data["activity_name"] !!}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endfor
        </div>
    </section>

    @include("layouts.footer")
@endsection
