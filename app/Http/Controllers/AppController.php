<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class AppController extends Controller
{
    public function home()
    {
        $raw_courses_data = File::get(public_path() . "/json/courses.json");
        $classes = json_decode($raw_courses_data, true);
        $keys = array_keys($classes);
        $ran_keys = Arr::random($keys, 3);
        $random_classes = [
            $ran_keys[0] => $classes[$ran_keys[0]],
            $ran_keys[1] => $classes[$ran_keys[1]],
            $ran_keys[2] => $classes[$ran_keys[2]],
        ];

        $raw_home_data = File::get(public_path() . "/json/home.json");
        $home_data = json_decode($raw_home_data, true);
        return view("home", compact('random_classes', 'home_data'));
    }

    public function about()
    {
        $raw_about_data = File::get(public_path() . "/json/about.json");
        $about_data = json_decode($raw_about_data, true);
        return view("about", compact("about_data"));
    }

    public function courses()
    {
        $raw_courses_data = File::get(public_path() . "/json/courses.json");
        $courses_data = json_decode($raw_courses_data, true);
        return view("courses", compact("courses_data"));
    }

    public function activities()
    {
        $raw_activities_data = File::get(public_path()."/json/activities.json");
        $activities_data = json_decode($raw_activities_data,true);
        shuffle($activities_data);
        $chunkSize = ceil(count($activities_data) / 4); // Use 4 coz of 4 column in activity page result will be the number of image per column

        return view("activities", compact("activities_data","chunkSize"));
    }

    public function contact()
    {
        return view("contact");
    }
}
