<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $about = StaticPage::where('key', 'about')->first();
        $vision = StaticPage::where('key', 'vision')->first();
        $message = StaticPage::where('key', 'message')->first();
        return view('web.about', compact('about', 'vision', 'message'));
    }
}
