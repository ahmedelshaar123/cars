<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $job = "job_$lang";
        return view('web.testimonials', compact('testimonials', 'job'));
    }
}
