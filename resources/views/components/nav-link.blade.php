{{-- <a {{ $attributes }} class="text-sm transition-all duration-300 tablet:grid tablet:h-full tablet:w-full tablet:place-items-center tablet:bg-color1 tablet:text-white tablet:shadow-2xl tablet:hover:bg-color2">{{ $slot }}</a> --}}

@props([
    "active",
])

@php
    $classes = $active ?? false ? "text-sm transition-all duration-300 tablet:grid tablet:h-full tablet:w-full tablet:place-items-center tablet:bg-color1 tablet:text-white tablet:shadow-2xl tablet:bg-color2 relative font-bold tracking-[1px] after:content-[''] phone:after:hidden after:absolute after:bg-color1 after:h-[3px] after:w-full after:left-0 after:-bottom-[5px] after:rounded-xl after:duration-300 after:hover:w-full" : "text-sm transition-all duration-300 tablet:grid tablet:h-full tablet:w-full tablet:place-items-center tablet:bg-color1 tablet:text-white tablet:shadow-2xl tablet:hover:bg-color2 relative font-bold tracking-[1px] after:content-[''] phone:after:hidden after:absolute after:bg-color1 after:h-[3px] after:w-0 after:left-0 after:-bottom-[5px] after:rounded-xl after:duration-300 after:hover:w-full";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }} class="">
    {{ $slot }}
</a>
