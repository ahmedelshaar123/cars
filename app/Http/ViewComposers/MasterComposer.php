<?php
namespace App\Http\ViewComposers;

use App\Models\Setting;
use App\Models\StaticPage;
use App\Models\TopSlider;
use Illuminate\View\View;

class MasterComposer
{
    public function compose(View $view)
    {
        $lang = \LaravelLocalization::getCurrentLocale();
        $view->with('nameVC', "name_$lang");
        $view->with('descVC', "desc_$lang");
        $view->with('valueVC', "value_$lang");
        $view->with('addressVC', Setting::where('key', 'address')->first());
        $view->with('phoneVC', Setting::where('key', 'phone')->first());
        $view->with('emailVC', Setting::where('key', 'email')->first());
        $view->with('workTimesVC', Setting::where('key', 'work_times')->first());
        $view->with('latVC', Setting::where('key', 'lat')->first());
        $view->with('lngVC', Setting::where('key', 'lng')->first());
    }
}
