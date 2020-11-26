<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\StaticPage;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        $about = StaticPage::where('key', 'about')->first();
        $testimonials = Testimonial::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $yearsOfExperience = Setting::where('key', 'years_of_experience')->first();
        $repairedCars = Setting::where('key', 'repaired_cars')->first();
        $workers = Setting::where('key', 'workers')->first();
        $job = "job_$lang";
        return view('web.index', compact('sliders', 'about', 'testimonials', 'job', 'yearsOfExperience', 'repairedCars',
            'workers'));
    }
}
