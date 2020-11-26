<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\RepairedCarRequest;
use App\Models\Brand;
use App\Models\RepairedCar;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\StaticPage;
use App\Models\Testimonial;
use App\Models\Year;
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
        $services = Service::all();
        $video = Setting::where('key', 'video')->first();
        $brands = Brand::all();
        $years = Year::all();
        return view('web.index', compact('sliders', 'about', 'testimonials', 'job', 'yearsOfExperience', 'repairedCars',
            'workers', 'services', 'video', 'brands', 'years'));
    }

    public function store(RepairedCarRequest $request) {
        RepairedCar::create($request->all());
        session()->flash('success', trans('web.contact_soon'));
        return back();
    }

    public function getModels(Request $request) {
        $brand = Brand::findOrFail($request->brand_id);
        $models = $brand->models()->get();
        $modelsId = $models->pluck('id')->toArray();
        $modelsName = $models->pluck('name')->toArray();
        return response()->json(['models_id' => $modelsId, 'models_name' => $modelsName]);

    }
}
