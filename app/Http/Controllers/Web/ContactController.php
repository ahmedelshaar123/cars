<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index() {
        return view('web.contact-us');
    }

    public function store(ContactRequest $request) {
        Contact::create($request->all());
        session()->flash('success', 'سيتم مراجعة رسالتك من قبل الادارة');
        return redirect(url('/'));
    }
}
