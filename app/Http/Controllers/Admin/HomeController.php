<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Contact;
use App\Models\RepairedCar;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::count();
        $sliders = Slider::count();
        $testimonials = Testimonial::count();
        $repairedCars = RepairedCar::count();
        $brands = Brand::count();
        $services = Service::count();
        return view('admin.home', compact('services','sliders', 'repairedCars', 'testimonials','brands', 'contacts'));
    }
}
