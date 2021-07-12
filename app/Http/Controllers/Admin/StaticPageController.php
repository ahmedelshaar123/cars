<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StaticPageRequest;
use App\Models\StaticPage;

class StaticPageController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:role-list|role-edit', ['only' => ['index']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    }

    public function index(){
        $staticPages = StaticPage::all();
        return view('admin.static pages.index_edit', compact('staticPages'));
    }

    public function update(StaticPageRequest $request)
    {
        $staticPages = StaticPage::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $val = 'value_' . $lang;
        $requestData = $request->all();

        foreach($requestData as $key=>$value)
        {
            foreach ($staticPages as $staticPage) {
                $staticPage->where('key', $key)->update([$val => $value]);
            }
        }
        session()->flash('key', trans('admin.edited'));
        return back();
    }
}
