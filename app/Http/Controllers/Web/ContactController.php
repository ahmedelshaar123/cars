<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('web.contact-us');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        session()->flash('success', trans('web.review_message'));
        return redirect(url('/'));
    }
}
