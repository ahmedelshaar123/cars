<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('web.galleries', compact('services'));
    }
}
