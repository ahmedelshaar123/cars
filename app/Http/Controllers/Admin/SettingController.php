<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:role-list|role-edit', ['only' => ['index']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    }

    public function index(){
        $settings = Setting::where('type', '!=', 'map')->get();
        $lat = Setting::where('key', 'lat')->first();
        $lng = Setting::where('key', 'lng')->first();
        return view('admin.settings.index_edit', compact('settings', 'lat', 'lng'));
    }

    public function update(SettingRequest $request)
    {
        $lang = \LaravelLocalization::getCurrentLocale();
        $val = 'value_' . $lang;
        $requestData = $request->all();
        foreach($requestData as $key=>$value)
        {
            $settings = Setting::all();
            foreach ($settings as $setting) {
                if($key == 'address' || $key == 'work_times') {
                    $setting->where('key', $key)->update([$val => $value]);
                }else {
                    $setting->where('key', $key)->update(['value_ar' => $value, 'value_en' => $value]);
                }
            }
        }
        session()->flash('key', trans('admin.edited'));
        return back();
    }
}
