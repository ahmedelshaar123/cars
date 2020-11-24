<?php

function makeImage($request, $dist, $var) {
    if(str_contains(Route::currentRouteName(), 'update')) {
        unlink($var->photo->path);
    }
    $path = public_path();
    $destinationPath = $path . '/' . $dist;
    $image = $request;
    $extension = $image->getClientOriginalExtension();
    $name = time() . '' . rand(11111, 99999) . '.' . $extension;
    $image->move($destinationPath, $name);
    if(str_contains(Route::currentRouteName(), 'store')) {
        $var->photo()->create(['path' => $dist . "/" . $name]);
        session()->flash('key', trans('admin.added'));
    }else {
        $var->photo()->update(['path' => $dist . '/' . $name]);
    }
}

function makeImages($request, $var) {
    foreach ($request->file('image') as $file) {
        $path = public_path();
        $destinationPath = $path . '/uploads/services';
        $extension = $file->getClientOriginalExtension();
        $name = time() . '' . rand(11111, 99999) . '.' . $extension;
        $file->move($destinationPath, $name);
        $var->photos()->create(['path' => 'uploads/services/' . $name]);
    }
}
