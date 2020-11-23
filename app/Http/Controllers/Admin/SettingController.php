<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function index(){
        $settings = Setting::all();
        return view('admin.settings.index_edit', compact('settings'));
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
